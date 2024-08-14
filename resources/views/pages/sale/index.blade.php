@extends('layouts.sale.app')
@section('content')
    <form class="page-content expand-delivery" id="form-order" ">
    <div class="col-left " ng-show="!$root.activeCart.isWarrantyCart()">
        <div class="cart-container cart-container-scroll" ng-class="{' carts-refund':$root.activeCart.isRefund(), 'enable-sort-product' : $root.cartDisplayOptions &amp;&amp; $root.cartDisplayOptions.usingSortProduct}"><!---->
            <div on-select-product="vm.onSelectProduct(selectedProduct)">
                <div class="welcome-page ng-hide" ng-hide="$root.activeCart.Items.length > 0 || $root.activeCart.isRefund()"><!---->
                    <div class="suggest-list" ng-if="$root.saleScreenMode !== 2"><!---->
                    </div><!---->
                </div>
                <div class="carts-list show-duplicate-item" id="cartListProduct" ng-class="{'show-duplicate-item' : $root.cartDisplayOptions.duplicateCartItem}"><!---->
                </div><!---->
            </div>
            <div><!---->
            </div>
        </div>
        <div class="cart-footer">
            <div class="cart-footer-left">
                <textarea class="form-control form-control-custom note-cart item-note- ng-empty ng-valid-maxlength" type="text" spellcheck="false" placeholder=" &nbsp;Ghi chú đơn hàng" kv-auto-expand-multi-line="" kv-focus-control-ready="{select: false}" maxlength="4000" tabindex="1500" style="height: 33px;"></textarea>
            </div><!---->
            <div class="cart-footer-right" ng-if="$root.saleScreenMode != 2 || $root.activeCart.isRefund() || $root.activeCart.isWarrantyCart()"><!----></div><!----><!---->
        </div>
    </div>
    <div class="col-right ">
        <div class="col-right-header" ng-show="$root.saleScreenMode === 1 || $root.activeCart.isRefund() || $root.activeCart.isWarrantyCart()">
            <div class="payment-header single-pricebook" ng-class="{'single-pricebook' : vm.priceBookLength < 2}">
                <div class="cart-header-control">
                    <div class="cart-header-control-left">
                        <div class="cart-seller">
                            <sold-by-dropdown-component>
                                <div id="salesman">
                                    <span title="" style="" class="k-widget k-dropdown k-header dropdown-control dropdown-control-sm saleman-dropdown" unselectable="on" role="listbox" aria-haspopup="true" aria-expanded="false" tabindex="2000" aria-owns="" aria-disabled="false" aria-busy="false" aria-activedescendant="bd4baf21-b719-4bac-89a1-040b8cb44fa8">
                                        <span unselectable="on" class="k-dropdown-wrap k-state-default">
                                            <span unselectable="on" class="k-input">
                                                <span>{{Auth::user()->name}}</span>
                                            </span>
                                            <span unselectable="on" class="k-select">
                                                <span unselectable="on" class="k-icon k-i-arrow-s">select</span>
                                            </span>
                                        </span>
{{--                                        <select class="dropdown-control dropdown-control-sm saleman-dropdown" data-role="dropdownlist" style="display: none;">--}}
                                        {{--                                            <option value="1000342177">Lê Thanh Quang</option>--}}
                                        {{--                                            <option value="1000342178">Nguyễn Thị Thái Hòa</option>--}}
                                        {{--                                            <option value="1000342179">Lê Thị Bảo Trân</option>--}}
                                        {{--                                        </select>--}}
                                    </span>
                                </div>
                            </sold-by-dropdown-component>
                        </div>
                        <sale-channel-component ng-show="!$root.activeCart.isWarrantyOrder()" sc-id="$root.activeCart.SaleChannelId" disabled="$root.activeCart.isRefund() &amp;&amp; !$root.activeCart.IsQuickReturn">
                            <div id="saleChannel"><span title="" style="" class="k-widget k-dropdown k-header dropdown-control dropdown-control-sm salechannel-dropdown-control" unselectable="on" role="listbox" aria-haspopup="true" aria-expanded="false" tabindex="2001" aria-owns="" aria-disabled="false" aria-busy="false" aria-activedescendant="0035efea-cb39-4d18-acd6-9bddaac2acd6"><span unselectable="on" class="k-dropdown-wrap k-state-default"><span unselectable="on" class="k-input"><i title="Kênh bán: Bán trực tiếp" class="fas fa-walking"></i></span><span unselectable="on" class="k-select"><span unselectable="on" class="k-icon k-i-arrow-s">select</span></span></span><select class="dropdown-control dropdown-control-sm salechannel-dropdown-control" ng-disabled="vm.disabled" data-role="dropdownlist" style="display: none;">
                                                        <option value="0" selected="selected">Bán trực tiếp</option>
                                                        <option value="1000000578">Khác</option>
                                                        <option value="-1">+ Thêm kênh bán</option>
                                                    </select></span></div>
                        </sale-channel-component>
                        <div class="reception-place ng-hide" ng-show="$root.activeCart.isWarrantyOrder()" id="warranty-reception-place"><span title="" style="" class="k-widget k-dropdown k-header dropdown-control dropdown-control-sm" unselectable="on" role="listbox" aria-haspopup="true" aria-expanded="false" tabindex="2001" aria-owns="warranty-reception-place-dropdown_listbox" aria-disabled="false" aria-busy="false" aria-activedescendant="5daf7fba-ee34-4579-980b-80a8319fb8d5"><span unselectable="on" class="k-dropdown-wrap k-state-default"><span unselectable="on" class="k-input"></span><span unselectable="on" class="k-select"><span unselectable="on" class="k-icon k-i-arrow-s">select</span></span></span><select class="dropdown-control dropdown-control-sm" id="warranty-reception-place-dropdown" k-data-source="vm.warrantyReceptionPlaceOptions" k-ng-model="$root.activeCart.WarrantyReceptionPlace" k-on-change="vm.warrantyReceptionPlaceChanged(item)" k-value-primitive="true" k-data-text-field="'Name'" k-data-value-field="'Id'" kendo-drop-down-list="" data-role="dropdownlist" style="display: none;">
                                                    <option value="1">Tại cửa hàng</option>
                                                    <option value="2">Tại nhà</option>
                                                    <option value="3">Khác</option>
                                                </select></span></div>
                    </div>
                    <div class="cart-header-control-right date-time-control">
                        <date-time-selector-component id="poscreenTimeComponent">
                            <input id="created_at" hidden value="{{now()}}">
                            <span class="k-widget k-datepicker k-header" style=""><span class="k-picker-wrap k-state-disabled"><input placeholder="{{now()}}" id="PurchaseDateCart" tabindex="2002" ng-paste="vm.onPaste($event.originalEvent)" data-role="datepicker" style="width: 100%;" type="text" class="k-input" role="combobox" aria-expanded="false" aria-owns="PurchaseDateCart_dateview" aria-disabled="true" disabled="disabled"><span unselectable="on" class="k-select" role="button" aria-controls="PurchaseDateCart_dateview"><span unselectable="on" class="k-icon k-i-calendar">select</span></span></span></span>
                            <span class="k-widget k-timepicker k-header" style=""><span class="k-picker-wrap k-state-disabled"><input placeholder="{{date("h:i:sa")}}" id="PurchaseTimeCart" tabindex="2003" data-role="timepicker" type="text" class="k-input" role="combobox" aria-expanded="false" aria-owns="PurchaseTimeCart_timeview" aria-disabled="true" style="width: 100%;" disabled="disabled"><span unselectable="on" class="k-select" role="button" aria-controls="PurchaseTimeCart_timeview"><span unselectable="on" class="k-icon k-i-clock">select</span></span></span></span>
                        </date-time-selector-component>
                    </div>
                </div>
                <div class="customer-search"><!---->
                    <customer-search-component customer="$root.activeCart.Customer" cdisabled="$root.activeCart.CustomerDisabled" on-change="vm.onChangeCustomer(customer)" ng-if="$root.saleScreenMode === 1 || $root.activeCart.isRefund() || $root.activeCart.isWarrantyCart()" ng-show="((!$root.activeCart.isRefund() || $root.activeCart.IsQuickReturn || root.activeCart.IsReturnImport) &amp;&amp; !$root.activeCart.OrderId &amp;&amp; !$root.activeCart.WarrantyOrderId) || $root.activeCart.Customer">
                        <div class="autocomplete-full"><!---->
                            <div ng-if="!vm.currentCustomer" class="autocomplete-input">
                                <div kv-autocomplete="vm.autocomplete" ng-model="vm.customerSearchTerm" template-id="customerItemTempl" data="vm.customers" attr-placeholder="Tìm khách hàng (F4)" attr-iconclass="fal fa-search" attr-inputclass="tabBut_0 form-control-custom" on-tindex="vm.tabIndex+1" on-type="vm.searchTermChanged" on-select="vm.changeCustomer" kv-disabled="vm.cdisabled" kv-message="'Không tìm thấy khách hàng phù hợp' | translate" class="ng-pristine ng-untouched ng-valid ng-empty">
                                    <div class="autocomplete" id="">
                                        <i class="fal fa-search"></i>
                                        <input type="text" autocomplete="on" ng-model="vm.searchParam" placeholder="Tìm khách hàng (F4)" class="form-control tabBut_0 form-control-custom ng-empty" id="customerSearchInput" kv-select-text="" tabindex="2010" kv-tab-index="">
                                        <div id="suggestions" class="output-complete is-offlin" style="display: none">

                                            {{--                                            <div class="not-found ng-hide" ng-show="vm.searchParam &amp;&amp; vm.suggestions.length == 0">Không tìm thấy khách hàng phù hợp</div>--}}
                                            {{--                                            <a class="add-new-product ng-hide" ng-click="vm.onAddNew()" ng-show="vm.isAddNew &amp;&amp; !vm.getStateSelectMulti(vm.listItems,vm.isMultiSelect)" href="javascript:;">+ Thêm mới hàng hóa</a>--}}
                                            {{--                                            <div class="multi-select-actions ng-hide" ng-show="vm.getStateSelectMulti(vm.listItems, vm.isMultiSelect)">--}}
                                            {{--                                                <span><span class="total-product">false</span> <span translate=""><span>sản phẩm</span></span></span>--}}
                                            {{--                                                <a class="btn btn-primary add-list-product" ng-click="vm.addMultiItemsToCart(vm.listItems)" href="javascript:;">Thêm vào đơn</a>--}}
                                            {{--                                            </div>--}}

                                        </div>

                                    </div>
                                </div>
                                <button class="btn-icon btn-icon-default" title="Thêm khách hàng" tabindex="2011">
                                    <i class="far fa-plus"></i>
                                </button>
                            </div>
                            <div class="selected-customer" id="selected-customer" style="display: none;">
                                <span id="customer-name" data-id=""></span>
                                <button class="border-none" type="button" id="remove-customer">x</button>
                            </div>

                        </div>
                    </customer-search-component>
                </div>
                <pricebook-component id="pricebook1" uib-tooltip="Bảng giá chung" tooltip-placement="bottom" tooltip-append-to-body="true" class="ng-hide">
                    <span title="" style="" class="k-widget k-dropdown k-header dropdown-control" unselectable="on" role="listbox" aria-haspopup="true" aria-expanded="false" tabindex="2014" aria-owns="pricebook_listbox" aria-disabled="false" aria-busy="false" aria-activedescendant="96945982-1650-44ec-868e-42d2982320e7">
                        <span unselectable="on" class="k-dropdown-wrap k-state-default">
                            <span unselectable="on" class="k-input">
                                <span>Bảng giáchung</span>
                            </span>
                            <span unselectable="on" class="k-select">
                                <span unselectable="on" class="k-icon k-i-arrow-s">select</span>
                            </span>
                        </span>
                        <select class="dropdown-control" id="pricebook" k-ng-model="vm.pricebook" ng-disabled="vm.readOnly" data-role="dropdownlist" style="display: none;">
                            <option>Bảng giá chung</option>
                        </select>
                    </span>
                </pricebook-component>
                <div class="customer-debt-point">
                    <div class="form-group-inline">
                        <div class="form-group-row ng-hide">
                            <span class="tag tag-xxs tag-light-danger"><span translate=""><span>Nợ:</span></span> <!----> <!----> <!----><span ng-if="$root.activeCart.Customer.Debt === undefined || !vm.isOnline">---</span><!----></span>
                        </div>
                        <div class="form-group-row ng-hide" ng-show="$root.activeCart.Customer &amp;&amp; $root.activeCart.Customer.RewardPoint &amp;&amp; $root.activeCart.isShowCustomerPoint($root.session.Setting) &amp;&amp; $root.session.Setting.RewardPoint &amp;&amp; $root.session.Privileges.CustomerPointAdjustment_Read">
                            <span class="tag tag-xxs tag-light-success" uib-tooltip="0" tooltip-placement="right" tooltip-append-to-body="true"><span translate=""><span>Điểm:</span></span> <!----> <!----><span ng-if="$root.activeCart.Customer.RewardPoint === undefined || !vm.isOnline">---</span><!----></span>
                        </div>
                    </div><!---->
                </div><!---->
            </div>
        </div><!---->
        <div class="col-right-content">
            <div class="wraper-payment-content"><!----></div><!---->
            <payment-component active-cart="$root.activeCart">
                <div class="wraper-payment "><!---->
                    <payment-invoice-component class="payment-invoice" is-delivery-tab="vm.isDeliveryTab" delivery="$root.activeCart.DeliveryDetail" ng-if="$root.activeCart.isInvoice()"><!---->
                        <div class="payment-content">
                            <div class="form-group-inline form-labels-125">
                                <div class="form-group-row form-group-row-sm">
                                    <label for="" class="col-form-label">Tổng tiền hàng</label>
                                    <div class="col-form-wrap d-flex">
                                        <span class="text-bg-default" id="quantityOrder"></span><!----><!---->
                                    </div>
                                </div>
                                <div class="form-group-row form-group-row-sm form-group-price">
                                    <div class="col-form-wrap font-size-medium text-right has-currency">
                                        <span data-total-amount="" id="total_amount">0</span></div>
                                </div>
                            </div>
                            <div class="form-group-inline form-labels-125">
                                <div class="form-group-row form-group-row-sm">
                                    <label for="" class="col-form-label">Giảm giá %</label>
                                    <div class="col-form-wrap">
                                        <span class="color-primary form-control-plaintext ratio-discount"></span>
                                        <span class="badge badge-promotion ng-hide">KM</span>
                                        <span class="badge badge-promotion disabled ng-hide">KM</span>
                                    </div>
                                </div>
                                <div class="form-group-row form-group-row-sm form-group-price cell-value-footer">
                                    <input id="discount" name="discount" type="number" value="" min="0" max="100" class="form-control form-control-sm form-control-invoice payingAmt text-right"/>
                                </div>
                            </div>
                            <div class="form-group-inline form-labels-125 ng-hide">
                                <div class="form-group-row form-group-row-sm">
                                    <label class="col-form-label font-bold"><span>Khách đã trả</span></label>
                                </div>
                                <div class="form-group-row form-group-row-sm form-group-price">
                                    <button class="form-control form-control-sm font-size-medium text-right">0</button>
                                </div>
                            </div>
                            <div class="form-group-inline form-customer-debt form-labels-125">
                                <div class="form-group-row form-group-row-sm">
                                    <label class="col-form-label font-bold"><span>Khách cần trả</span></label>
                                    <div class="col-form-wrap"><!----></div>
                                </div>
                                <div class="form-group-row form-group-row-sm">
                                    <span class="col-form-wrap amount-pay text-right" data-amount-due="" id="amountDue">0</span>
                                </div>
                            </div>
                            <div class="form-group-inline form-labels-125">
                                <div class="form-group-row form-group-row-sm">
                                    <label class="col-form-label font-bold">Khách thanh toán</label></div>
                                <div class="form-group-row form-group-row-sm form-group-price">
                                    <div class="col-form-wrap">
                                        <input type="hidden" name="amountPaid" value="0" id="amountPaid-hidden">
                                        <input id="amountPaid" value="" class="form-control form-control-sm text-right payingAmt" type="text">
                                    </div>
                                    <span class="form-control-plaintext text-right ng-hide">0</span>
                                </div>
                            </div>
                            <div class="form-group-row form-check-methods" ng-show="$root.activeCart.BalanceDue > 0.00001 &amp;&amp; !vm.isOnlyShowTotalPaidAmount()">
                                <div class="flex-1" ng-class="{'disabled': $root.activeCart.isHideSinglePayment}">
                                    <label class="form-check form-check-inline"><input class="form-check-input ng-pristine ng-untouched ng-valid ng-not-empty" checked name="payment_method" type="radio" ng-value="0" ng-model="$root.activeCart.singlePaymentType" tabindex="2099" ng-click="vm.changeSinglePaymentType('Cash')" name="238" value="0">
                                        <span class="text-check" translate=""><span>Tiền mặt</span></span>
                                    </label>

{{--                                    <label class="form-check form-check-inline"><input class="form-check-input ng-pristine ng-untouched ng-valid ng-not-empty" name="payment_method" type="radio" ng-value="2" ng-model="$root.activeCart.singlePaymentType" tabindex="2100" ng-click="vm.changeSinglePaymentType('Transfer')" name="239" value="2">--}}
{{--                                        <span class="text-check" translate=""><span>Chuyển khoản</span></span></label>--}}
{{--                                    <label class="form-check form-check-inline"><input class="form-check-input ng-pristine ng-untouched ng-valid ng-not-empty" name="payment_method" type="radio" ng-value="1" ng-model="$root.activeCart.singlePaymentType" tabindex="2101" ng-click="vm.changeSinglePaymentType('Card')" name="240" value="1">--}}
{{--                                        <span class="text-check" translate=""><span>Momo</span></span></label> <!---->--}}
{{--                                    <label class="form-check form-check-inline"><input class="form-check-input ng-pristine ng-untouched ng-valid ng-not-empty" name="payment_method" type="radio" ng-value="3" ng-model="$root.activeCart.singlePaymentType" tabindex="2102" ng-click="vm.changeSinglePaymentType('Wallet')" name="745" value="3">--}}
{{--                                        <span class="text-check" translate=""><span>Ví</span></span>--}}
{{--                                    </label>--}}
                                </div>
                                <div>
                                    <button class="btn-icon btn-icon-default btn-multi-methods" uib-tooltip="Thanh toán kết hợp" tooltip-placement="bottom" tooltip-append-to-body="true" tooltip-class="tooltip-popup-multi-currency tooltip-widget" ng-click="vm.doOpenPaymentPopup()" tabindex="2103">
                                        <i class="far fa-ellipsis-v"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="form-labels-250 form-pay-customers">
                                <div class="form-group-row form-group-row-sm form-check-payment form-check-methods">
                                    <label class="col-form-label"><span>Tiền thừa trả khách</span></label>
                                    <label class="col-form-label ng-hide"><!----><a class="link-color add-to-debt" tabindex="2119" "><span>Tính vào công nợ</span></a>
                                    </label>
                                    <div class="col-form-label ng-hide" ng-show="$root.activeCart.CustomerId &amp;&amp; ($root.activeCart.PayingAmount - $root.activeCart.BalanceDue) > 0.000001 &amp;&amp; !vm.isOnlyPointPayment">
                                        <label class="form-check"><input class="form-check-input ng-pristine ng-untouched ng-valid ng-not-empty" type="radio" ng-model="$root.activeCart.addToAccount" ng-disabled="$root.activeCart.isUpdated() &amp;&amp; $root.activeCart.IsHideReturnCustomerMoney" value="0" tabindex="2119" name="242">
                                            <span class="text-check" translate="">
                                                        <span>Tiền thừa trả khách</span>
                                                    </span>
                                        </label>
                                    </div>
                                    <div class="col-form-wrap form-control-plaintext payingAmt font-size-medium text-right" id="change">0</div>
                                </div>
                            </div>
                            <div class="form-labels-250">
                                <div class="form-group-row form-group-row-sm form-check-payment form-check-methods ng-hide" ng-show="$root.activeCart.CustomerId &amp;&amp; ($root.activeCart.PayingAmount - $root.activeCart.BalanceDue) > 0.000001 &amp;&amp; !vm.isOnlyPointPayment">
                                    <div class="col-form-label">
                                        <label class="form-check"><input class="form-check-input ng-pristine ng-untouched ng-valid ng-not-empty" type="radio" ng-model="$root.activeCart.addToAccount" value="1" tabindex="2120" name="243"> <!----><span class="text-check" ng-if="$root.activeCart.addToAccount == '0' || !vm.isOnline || $root.activeCart.isUpdated()" translate=""><span>Tính vào công nợ</span></span><!----> <!---->
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </payment-invoice-component>
                </div>
            </payment-component>
        </div>
        <div class="cart-actions">
            <button type="submit" class="btn btn-primary btn-xl">Thanh toán</button>
        </div>
    </div>
    </form>
@endsection

@push('style')
    <style>
		#remove-customer {
			border: none;
			border-radius: 5px;
			color: gray;
		}
		.suggestions {
			border: 1px solid #ccc;
			max-height: 200px;
			overflow-y: auto;
			position: absolute;
			z-index: 1000;
			background-color: white;
			width: calc(100% - 22px);
		}
		.suggestion-item {
			padding: 8px;
			cursor: pointer;
		}
		.suggestion-item:hover {
			background-color: #f0f0f0;
		}
		.selected-customer {
			display: flex;
			align-items: center;
			margin-top: 10px;
		}
		.selected-customer span {
			margin-right: 10px;
		}
		.selected-customer button {
			cursor: pointer;
		}
    </style>
@endpush
@push('script')
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js')}}"></script>
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>--}}
    <script src="{{ asset('assets/js/sweetalert2@11.js')}}"></script>

    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#customerSearchInput').on('keyup', function () {
                let query = $(this).val();
                if (query.length > 0) {
                    $.ajax({
                        url: '{{ route('sale.customer.index') }}',
                        data: {query: query},
                        success: function (data) {
                            let suggestions = $('#suggestions');
                            suggestions.empty();
                            $.each(data, function (index, customer) {
                                suggestions.append(
                                    ` <ul class="suggestion-item" data-id="${customer.id}" data-label="${customer.name} - ${customer.city_name}">
                                        <li suggestion="" index="0" val="Anh Hoàng - Sài Gòn" class="output-item">
                                            <div class="output-body">
                                                <div class="output-info">
                                                    <h5 class="output-name">${customer.name ?? ''}</h5>
                                                    <div class="output-value">
                                                        <span class="output-code">Mã: KH00${customer.id ?? ''}</span>
                                                    </div>
                                                </div>
                                                <div class="output-phone">
                                                    <span class="output-code">${customer.phone ?? ''}</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>`
                                );
                            });
                            suggestions.show();
                        },
                        error: function (err) {
                            console.log(err);
                        }
                    });
                }
                else {
                    $('#suggestions').hide();
                }
            });

            $(document).on('click', '.suggestion-item', function () {
                let selectedCustomer = $(this).data('label');
                let customerId = $(this).data('id');
                $('#customer-input').val(selectedCustomer);
                $('#customer-name').text(selectedCustomer);
                $('#customer-name').data('id',customerId);
                $('#selected-customer').show();
                $('#suggestions').hide();
                $('#customerSearchInput').val('');
            });

            $('#remove-customer').click(function () {
                $('#customer-input').val('');
                $('#selected-customer').hide();
                $('#suggestions').hide();
            });

            //Show 'product list' render from VIEW
            $('#productSearchInput').focus(function () {
                $('#toggleProduct').show();
            });

            //Show product list from API
            $('#productSearchInput').on('keyup', function () {
                $('#toggleProduct').removeClass('ng-hide');
                var query = $(this).val();
                $.ajax({
                    url: "{{ route('sale.search') }}",
                    type: "GET",
                    data: {'query': query},
                    success: function (data) {
                        $('#productSearchList').empty();
                        $.each(data, function (index, product) {
                            const formatter = new Intl.NumberFormat('vi-VN', {
                                style: 'currency',
                                currency: 'VND',
                            });
                            let id = product.product_id;
                            let product_name = product.product.name;
                            let price = product.sale_price;
                            let formattedPrice = formatter.format(price);
                            let photo = product.photo[0].url;

                            let optionValueName = '';
                            for(x in product.sku_value){
                                optionValueName+=  product.sku_value[x].option_value.name + ' ' ;
                            }

                            $('#productSearchList').append(' <li class="addProduct output-item is-on-cart " data-id="' + id + '" data-name="' + product_name + '" data-price="' + price + '">' +
                                '<div class="output-thumb-wrap">' +
                                '<div class="output-thumb">' +
                                '<button class="output-product-lk" >' +
                                '<i class="far fa-ellipsis-h"></i>' +
                                '</button> <!----><img loading="lazy" src="/storage/' + photo + '">' +
                                '</div>' +
                                '<div class="output-thumb-secondary"><i class="fas fa-image img-default"></i>' +
                                '</div>' +
                                '</div> <!---->' +
                                '<div class="output-body" ng-if="suggestion.Id">' +
                                '<div class="output-info"><h5 class="output-name font-medium">' +
                                '<span class="">' + product_name + '  ' + optionValueName + '</span>' +
                                '<span class="tag tag-xxs tag-light-warning"></span>' +
                                '<span class="tag tag-xxs tag-light-primary"></span></h5> <!---->' +
                                '<div ng-if="!vm.isLimitViewPriceWarrantyOrder" class="output-price">' +
                                '<span class="product-price-new has-currency">' + formattedPrice + '</span>' +
                                '</div><!---->' +
                                '</div>' +
                                '<div class="output-value"><span class="output-code">SP000' + id + '</span>' +
                                '</div> <!---->' +
                                ' <div class="output-unit" ng-if="$root.session.User.IsAdmin || $root.session.Privileges.Invoice_ReadOnHand">' +
                                '<span class="output-tag"> <span translate=""><span>Tồn</span></span>: <span class="onHandValue">0</span> </span>' +
                                '<span class="output-tag ng-hide" ng-show="vm.isUseOrderSupplier"> <span translate=""><span>Đặt NCC</span></span>: <span class="priceValue">0</span> </span>' +
                                '<span class="output-tag"> <span translate=""><span>KH đặt</span></span>: <span class="reservedValue"> 0 </span> </span>' +
                                '</div><!---->' +
                                '</div><!----> <!---->' +
                                '</li>');
                        });
                    }
                });
            });

            $(document).click(function (event) {
                if (!$(event.target).closest('#productSearchInput, #productSearchList').length) {
                    $('#toggleProduct').hide();
                }

                if (!$(event.target).closest('#sale-menu-bar').length) {
                    $('#sale-menu-bar').removeClass('open');
                }
            });

            //Show menu bar header
            $('#sale-menu-bar').click(function () {
                $('#sale-menu-bar').addClass('open');
            });

            //Add product to cart
            $('#productSearchList').on('click', '.addProduct', function (event) {
                event.stopPropagation();
                let id = $(this).data('id');
                let name = $(this).data('name');
                let priceCur = $(this).data('price');

                const formatter = new Intl.NumberFormat('vi-VN', {
                    style: 'currency',
                    currency: 'VND',
                });
                const price = formatter.format(priceCur);

                var cartItem = $('#cartListProduct').find('.carts-item[data-id="' + id + '"]');
                if (cartItem.length > 0) {
                    var quantityElem = cartItem.find('.quantity-input');
                    var quantity = parseInt(quantityElem.val());
                    quantityElem.val(quantity + 1);
                    updateOrderTotal();
                }
                else {
                    let item = '<div class="carts active cart-materials" style="margin-bottom: 3px;">' +
                        '<div class="carts-item" data-id="' + id + '">' +
                        '<div class="carts-left">' +
                        '<div class="cell-order" ></div>' +
                        '<div class="cell-actions carts-actions" >' +
                        '<button class="btn-icon btn-icon-default remove-item"  title="Xóa hàng hóa" tabindex="4">' +
                        '<i class="far fa-trash-alt"></i></button>' +
                        '</div>' +
                        '</div>' +
                        '<div class="carts-content">' +
                        '<div class="carts-container">' +
                        '<div class="carts-content-info">' +
                        '<div class="carts-content-top">' +
                        '<div class="cell-code"  title="Tồn: 0  − KH đặt: 0">SP000' + id + '</div><!---->' +
                        '<div class="cell-info">' +
                        '<div class="info-content" ><span title="Tồn: 0 − KH đặt: 0">' + name + '</span> ' +
                        '<button class="btn-icon btn-inventory" >' +
                        '<i class="far fa-info-circle"></i>' +
                        '</button>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '<div class="carts-content-bottom" >' +
                        '<div class="cell-quantity error" >' +
                        '<div class="quantity quantity-sm">' +
                        '<button type="button" class="btn-icon btn-icon-bg-default down minus">' +
                        '<i class="fal fa-minus"></i>' +
                        '</button>' +
                        '<input type="text" value="1" readonly data-price="' + priceCur + '"  class="form-control form-control-sm form-control-invoice note-cartitem-0 ng-not-empty form-control-error quantity-input">' +
                        '<button type="button" class="btn-icon btn-icon-bg-default up plus">' +
                        '<i class="fal fa-plus"></i>' +
                        '</button>' +
                        '<span class="sub-label ng-hide" >/ 0</span>' +
                        '</div>' +
                        '</div>' +
                        '<div class="cell-auto" ></div>' +
                        '<div class="cell-change-price" ><!---->' +
                        '<div class="popup-anchor" >' +
                        '<button class="form-control form-control-sm text-right cart-item-0 "> <span class="sale_price">' + price + '</span></button>' +
                        '</div>' +
                        '</div>' +
                        '<div class="cell-change-price" ng-if="$root.cartDisplayOptions.total"><!----><!---->' +
                        '<div class="cell-total text-right" ng-if="!$root.cartDisplayOptions.changeSubTotal || $root.activeCart.Type == vm.returnCartStatus || $root.activeCart.Type == vm.newReturnCartStatus">' +
                        '<span class="cart-price-new has-currency">' + price + '</span>' +
                        '</div><!---->' +
                        '</div><!---->' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '<div class="carts-secondary cell-secondary"><!----><!---->' +
                        '<div class="carts-note ng-hide">' +
                        '<textarea class="form-control form-control-custom item-note-0 ng-empty ng-valid-maxlength show-with-more" maxlength="300" spellcheck="false" tabindex="7"  placeholder="Ghi chú..." ></textarea>' +
                        '</div>' +
                        '<div class="carts-note carts-note-material ng-hide" >' +
                        '<textarea class="form-control form-control-custom item-note-0 ng-empty ng-valid-maxlength show-with-more"   maxlength="500" tabindex="7" placeholder="Ghi chú tính toán..." ></textarea>' +
                        '<a class="form-conversion-unit text-link ng-hide" href="javascript:void(0)" ><span translate=""><span>Tương đương</span></span>' +
                        '<span class="font-bold"> </span></a></div>' +
                        '</div>' +
                        '</div>' +
                        '<div class="cell-actions carts-actions"><!---->' +
                        '<a class="btn-icon btn-icon-default btn-more"  href="#" tabindex="12" ><i class="far fa-ellipsis-v"></i></a>' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                    $('#cartListProduct').append(item);
                    updateOrderTotal();
                }
            });

            //Handle form submit
            $('#form-order').submit(function (e) {
                e.preventDefault();

                let cartItems = [];
                $('.carts-item').each(function () {
                    let item = {
                        product_id: $(this).data('id'),
                        quantity: $(this).find('.quantity-input').val(),
                        unit_amount: $(this).find('.quantity-input').data('price'),
                        total_amount: $(this).find('.quantity-input').data('price') * $(this).find('.quantity-input').val(),
                    };
                    cartItems.push(item);
                });

                let grandTotal = $('#amountDue').data('amount-due');
                let createdAt = $('#created_at').val();
                let discount = $('#discount').val();
                let totalPayment = $('#amountPaid-hidden').val();
                $('#change').text('');

                let customerId = $('#customer-name').data('id');
                $.ajax({
                    url: '{{ route("sale.orders.store") }}',
                    method: 'POST',
                    data: {
                        cartItems: cartItems,
                        grandTotal: grandTotal,
                        createdAt: createdAt,
                        discount: discount,
                        totalPayment: totalPayment,
                        customerId: customerId
                    },
                    success: function (response) {
                        if (response.status === 'success') {
                            $('#cartListProduct').empty();
                            $('#amountPaid').val('');
                            updateOrderTotal();

                            const Toast = Swal.mixin({
                                toast: true,
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 2000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.onmouseenter = Swal.stopTimer;
                                    toast.onmouseleave = Swal.resumeTimer;
                                }
                            });
                            Toast.fire({
                                title: 'Success',
                                text: 'Cart saved successfully!',
                                icon: 'success',

                            })
                        }
                    },
                    error: function (err) {
                        console.log(err);
                    }
                });
            })

            //Remove cart item
            $(document).on('click', '.remove-item', function () {
                $(this).closest('.carts').remove();
                updateOrderTotal();
            });

            $(document).on('click', '.plus', function () {
                var quantityInput = $(this).siblings('.quantity-input');
                var currentQuantity = parseInt(quantityInput.val());
                quantityInput.val(currentQuantity + 1);
                updateItemTotal(quantityInput);
                updateOrderTotal();
            });

            $(document).on('click', '.minus', function () {
                var quantityInput = $(this).siblings('.quantity-input');
                var currentQuantity = parseInt(quantityInput.val());
                if (currentQuantity > 1) {
                    quantityInput.val(currentQuantity - 1);
                    updateItemTotal(quantityInput);
                    updateOrderTotal();
                }

            });

            $(document).on('input', '.quantity-input', function () {
                updateItemTotal($(this));
                updateOrderTotal();
            });

            function updateItemTotal(quantityInput) {
                const price = parseInt(quantityInput.data('price'));
                const quantity = parseInt(quantityInput.val());
                const total = price * quantity;

                quantityInput.closest('.carts-content-bottom').find('.cell-change-price .cart-price-new').text(total.toLocaleString('vi-VN'));
            }

            //Update total total order
            function updateOrderTotal() {
                let total = 0;
                $('.quantity-input').each(function () {
                    const price = parseInt($(this).data('price'));
                    const quantity = parseInt($(this).val());
                    total += price * quantity;
                });

                $('#total_amount').text(total.toLocaleString('vi-VN'));
                $('#total_amount').data('total-amount', total);
                updateAmountDue();
                calculateChange();
                updateQuantityOrder();
            }

            //Update total quantity
            function updateQuantityOrder() {
                let quantityOrder = 0;
                $('.quantity-input').each(function () {
                    const quantity = parseInt($(this).val());
                    quantityOrder += quantity;
                });

                $('#quantityOrder').text(quantityOrder);
            }

            function updateAmountDue() {
                const total = parseFloat($('#total_amount').data('total-amount'));
                let discount = parseFloat($('#discount').val());
                if (!discount) {
                    discount = 0;
                }
                let amountDue = total - (total * discount / 100);

                if (!amountDue) {
                    amountDue = 0;
                }

                $('#amountDue').text(amountDue.toLocaleString('vi-VN'));
                $('#amountDue').data('amount-due', amountDue);
                calculateChange();
            }

            $('#discount').on('input', updateAmountDue);

            function calculateChange() {
                const amountDue = parseFloat($('#amountDue').data('amount-due'));
                let amountPaid = parseFloat($('#amountPaid-hidden').val());
                if (!amountPaid) {
                    amountPaid = 0;
                }

                let change = amountPaid - amountDue;

                if (!change) {
                    change = 0;
                }
                $('#change').text(change.toLocaleString('vi-VN'));
            }

            function setFormat() {
                var input = $(this).val().replace(/[^0-9]/g, '');
                var numberValue = parseInt(input, 10);

                if (!isNaN(numberValue)) {
                    var formattedValue = numberValue.toLocaleString('vi-VN');
                    $(this).val(formattedValue);
                    $('#amountPaid-hidden').val(numberValue);
                }
                else {
                    $(this).val('');
                    $('#amountPaid-hidden').val('');
                }
            }

            $('#amountPaid').on('input', setFormat);
            $('#amountPaid').on('input', calculateChange);

            function formatCurrency(amount) {
                return new Intl.NumberFormat('vi-VN', {style: 'currency', currency: 'VND'}).format(amount);
            }

        });
    </script>
@endpush