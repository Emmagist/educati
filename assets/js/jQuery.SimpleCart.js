/*
 * jQuery Simple Shopping Cart v0.1
 * Basis shopping cart using javascript/Jquery.
 *
 * Authour : Sirisha
 */


/* '(function(){})();' this function is used, to make all variables of the plugin Private */

(function ($, window, document, undefined) {

    /* Default Options */
    var defaults = {
        cart: [],
        addtoCartClass: '.sc-add-to-cart',
        cartProductListClass: '.cart-products-list',
        totalCartCountClass: '.total-cart-count',
        totalCartCostClass: '.total-cart-cost',
        showcartID : '#show-cart',
        RemoveID : '.remove-item',
        clearCart : '.clear-cart',
        clearAfterpayment : '#proceedToDelete',
        itemCountClass : '.item-count'
    };

    function Item(name, price, count, subid, sub_type) {
        this.name = name;
        this.price = price;
        this.count = count;
        this.subid = subid; //alert(subid);
        this.sub_type = sub_type;
    }
    /*Constructor function*/
    function simpleCart(domEle, options) {

        /* Merge user settings with default, recursively */
        this.options = $.extend(true, {}, defaults, options);
        //Cart array
        this.cart = [];
        //Dom Element
        this.cart_ele = $(domEle);
        //Initial init function
        this.init();
    }


    /*plugin functions */
    $.extend(simpleCart.prototype, {
        init: function () {
            this._setupCart();
            this._setEvents();
            this._loadCart();
            this._updateCartDetails();
        },
        _setupCart: function () {
            this.cart_ele.addClass("cart-grid panel panel-defaults");
            this.cart_ele.append("<div class='panel-heading cart-heading'><div class='total-cart-count'>Your Cart 0 items</div><div class='spacer'></div><i class='fa fa-dollar total-cart-cost'>0</i><div></div></div>")
            this.cart_ele.append("<div class='panel-body cart-body'><div class='cart-products-list' id='show-cart'><!-- Dynamic Code from Script comes here--></div></div>")
            this.cart_ele.append("<div class='cart-summary-container'  style='margin-left:67%; border:none'>\n\
                                <div class='cart-offer'></div>\n\
                                        <div class='cart-total-amount' style='border:none'>\n\
                                            <div  style='margin-left:60%'>Total</div>\n\
                                                <div class='spacer'></div>\n\
                                                <div><i class='fa fa-dollar total-cart-cost'>0</i></div>\n\
                                            </div>\n\
                                        </div>\n\
                                 </div>");
        },
        _addProductstoCart: function () {
        },
        _updateCartDetails: function () {
            var mi = this;
            var sub_dis =0;
            $(this.options.cartProductListClass).html(mi._displayCart());
            $(this.options.totalCartCountClass).html("Your Order (" + mi._totalCartCount() + " Courses)");
            $(this.options.totalCartCostClass).html(mi._totalCartCost());
            $('#mydiv').attr("data-count",mi._totalCartCount()); //setter
            $(".badge-notify").html(mi._totalCartCount());
            $(".badge-notify").val(mi._totalCartCount());
            $("#mytotal").val(mi._totalCartCost());
            $("#mytotal_item").val(mi._totalCartCount());
            var discountper = eval($('#discountper').val())
            var calca = (discountper/100)  * eval(mi._totalCartCost());
            var discount = eval(mi._totalCartCost()) - calca
            $("#discount").val(discount)
            $("#counter").val(mi._totalCartCount());
            $(this.options.bonusDiscount).html(calca);
            // if(eval(mi._totalCartCount()) >= 15){
            //     sub_dis = 20
            // }
            // else if(eval(mi._totalCartCount()) >= 10){
            //     sub_dis = 15
            // }
            // else if(eval(mi._totalCartCount()) >= 5){
            //     sub_dis = 10
            // }
            var calca2 = (sub_dis/100)  * eval(mi._totalCartCost())
            $(this.options.bundleDicount).html(calca2);
            
            $("#sub_bundle").val(calca2)
            var paytotal = eval(mi._totalCartCost()) - calca - calca2
            $(".sub-cart-cost").html(paytotal)
            //$('#checkout').html("Pay "+paytotal); //setter data-discout

            $(this.options.cartProductListClass).html(mi._displayCart());
            $(this.options.totalCartCountClass).html("Your Cart " + mi._totalCartCount() + " items");
            $(this.options.totalCartCostClass).html(mi._totalCartCost());
            
        },
        _setCartbuttons: function () {

        },
        _setEvents: function () {
            var mi = this;
            $(this.options.addtoCartClass).on("click", function (e) {
                e.preventDefault();
                var name = $(this).attr("data-name");
                var price = Number($(this).attr("data-price")); //alert(price);
                var subid = Number($(this).attr("data-pge"));
                var buddle = Number($(this).attr("data-buddle")); //alert(price);
                var sub_type = Number($(this).attr("data-sub_type")); //alert(sub_type);
                mi._addItemToCart(name, price, 1, subid, sub_type);
                mi._updateCartDetails();
                if(sub_type == 1){
                    location.href = "cart2.php";
                }
                // else{
                //     $("#course-modal").modal("hide")
                // }
            });

            $(this.options.showcartID).on("change", this.options.itemCountClass, function (e) {
                var ci = this;
                e.preventDefault();
                var count = $(this).val();
                var name = $(this).attr("data-name");
                var price = Number($(this).attr("data-price"));
                var subid = Number($(this).attr("data-pge"));
                var sub_type = Number($(this).attr("data-sub_type"));
                mi._removeItemfromCart(name, price, count, subid, sub_type);
                mi._updateCartDetails();
            });

            $(this.options.showcartID).on("click", this.options.RemoveID, function (e) {
                var ci = this;
                e.preventDefault();
                var count = 0;
                var name = $(this).attr("data-name"); //alert(name);
                var price = Number($(this).attr("data-price")); //alert( price);
                var subid = Number($(this).attr("data-pge")); //alert(subid);
                var sub_type = Number($(this).attr("data-sub_type"));
                mi._removeItemfromCart(name, price, count, subid, sub_type);
                mi._updateCartDetails();
            });

            $(this.options.clearCart).on("click", function (e) {
                if(eval($("#empty_val").val()) == 0){
                    if (confirm("You're About clear your Cart")) {
                        mi._clearCart()
                        mi._updateCartDetails();
                        swal("Cart Empty!", "You have successfully clear your Cart", "success");
                        // location.href = "shop.php";
                    }
                } 
                else{
                    mi._clearCart()
                    mi._updateCartDetails();
                }
                return false;
            });

            $(this.options.clearAfterpayment).on("click", function (e) {
                if(eval($("#empty_val").val()) == 0){
                        mi._clearCart()
                        mi._updateCartDetails();
                        swal("Cart Empty!", "Items purchased successfully...", "success");
                        // location.href = "shop.php";
                } 
                else{
                    mi._clearCart()
                    mi._updateCartDetails();
                }
                return false;
            });

        },
        /* Helper Functions */
        _addItemToCart: function (name, price, count, subid, sub_type) {
            for (var i in this.cart) {
                if (this.cart[i].name === name && this.cart[i].subid === subid) {
                    this.cart[i].count++;
                    this.cart[i].sub_type; //alert(r);
                    this.cart[i].price = price * this.cart[i].count;
                    this._saveCart();
                    return;
                }
            }
            var item = new Item(name, price, count, subid, sub_type);
            this.cart.push(item);
            this._saveCart();
        },
        _removeItemfromCart: function (name, price, count, subid, sub_type) {
            for (var i in this.cart) {
                if (this.cart[i].name === name && this.cart[i].subid === subid) {
                    var singleItemCost = Number(price / this.cart[i].count);
                    this.cart[i].count = count;
                    this.cart[i].sub_type = sub_type;
                    this.cart[i].price = singleItemCost * count;
                    if (count == 0) {
                        this.cart.splice(i, 1);
                    }
                    break;
                }
            }
            this._saveCart();
        },
        _clearCart: function () {
            this.cart = [];
            this._saveCart();
        },
        _totalCartCount: function () {
            return this.cart.length;
        },
        _displayCart: function () {
            var cartArray = this._listCart();
            // console.log(cartArray);
            var output = "";
            if (cartArray.length <= 0) {
                output = "<h4>Your cart is empty</h4>";
            }
            $('#checkout').click(function (e) {
                e.preventDefault;
                cartArray.length = 0;
                output = "<h4 class='text-success'>Items Purchased Successfully...</h4>";
                // location.href = "student-profile.php";
            });
            
            for (var i in cartArray) {
                output += "<div class='cart-each-product'>\n\
                <div class='name'>" + cartArray[i].name + "</div>\n\
                <div class='quantityContainer'>\n\
                    <input type='hidden' value='" + cartArray[i].name + "' name='item[]'> <input type='hidden' value='" + cartArray[i].price + "' name='price[]'> <input type='hidden' value='" + cartArray[i].subid + "' name='subid[]'>\n\
                </div>\n\
                <div class='' style='width:50px'><i class='fa fa-ngn quantity-am'>  " + cartArray[i].price + "</i></div>\n\
                <div class='quantity-am' style='width:10px'><a href='#' class='remove-item' data-name='" + cartArray[i].name + "' data-price='" + cartArray[i].price + "' data-pge='" + cartArray[i].subid + "'><i class='fa fa-trash'></i></a></div>\n\
                </div>";
            }
                
            
            return output;
        },
        _totalCartCost: function () {
            var totalCost = 0;
            for (var i in this.cart) {
                totalCost += this.cart[i].price;
            }
            return totalCost;
        },
        _listCart: function () {
            var cartCopy = [];
            for (var i in this.cart) {
                var item = this.cart[i];
                var itemCopy = {};
                for (var p in item) {
                    itemCopy[p] = item[p];
                }
                cartCopy.push(itemCopy);
            }
            return cartCopy;
        },
        _calGST: function () {
            var GSTPercent = 18;
            var totalcost = this.totalCartCost();
            var calGST = Number((totalcost * GSTPercent) / 100);
            return calGST;
        },
        _saveCart: function () {
            localStorage.setItem("shoppingCart", JSON.stringify(this.cart));
        },
        _loadCart: function () {
            this.cart = JSON.parse(localStorage.getItem("shoppingCart"));
            if (this.cart === null) {
                this.cart = [];
            }
        }
    });
    /* Defining the Structure of the plugin 'simpleCart'*/
    $.fn.simpleCart = function (options) {
        return this.each(function () {
            $.data(this, "simpleCart", new simpleCart(this));
            console.log($(this, "simpleCart"));
        });
    }
    ;
})(jQuery, window, document);



