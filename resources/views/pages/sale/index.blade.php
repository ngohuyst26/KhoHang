@extends('layouts.sale.app')
@section('content')
    <div class="page-content expand-delivery" ng-class="{' has-exchange':$root.activeCart.hasExchange(), 'row-revert' : $root.activeCart.isWarrantyCart()}">
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
                    <textarea class="form-control form-control-custom note-cart item-note- ng-empty ng-valid-maxlength" type="text" spellcheck="false" ng-model="$root.activeCart.Description" placeholder=" &nbsp;Ghi chú đơn hàng" kv-auto-expand-multi-line="" kv-focus-control-ready="{select: false}" maxlength="4000" tabindex="1500" style="height: 33px;"></textarea>
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
                                    <div id="salesman"><span title="" style="" class="k-widget k-dropdown k-header dropdown-control dropdown-control-sm saleman-dropdown" unselectable="on" role="listbox" aria-haspopup="true" aria-expanded="false" tabindex="2000" aria-owns="" aria-disabled="false" aria-busy="false" aria-activedescendant="bd4baf21-b719-4bac-89a1-040b8cb44fa8"><span unselectable="on" class="k-dropdown-wrap k-state-default"><span unselectable="on" class="k-input"><span>Lê Thanh Quang</span></span><span unselectable="on" class="k-select"><span unselectable="on" class="k-icon k-i-arrow-s">select</span></span></span><select class="dropdown-control dropdown-control-sm saleman-dropdown" kendo-drop-down-list="vm.salesmanDropDown" k-options="vm.salesmanOptions" k-ng-model="$root.activeCart.SoldBy" ng-disabled="!$root.session.Privileges.Invoice_ModifySeller" data-role="dropdownlist" style="display: none;">
                                                        <option value="1000342177">Lê Thanh Quang</option>
                                                        <option value="1000342178">Nguyễn Thị Thái Hòa</option>
                                                        <option value="1000342179">Lê Thị Bảo Trân</option>
                                                    </select></span></div>
                                </sold-by-dropdown-component>
                            </div>
                            <sale-channel-component ng-show="!$root.activeCart.isWarrantyOrder()" sc-id="$root.activeCart.SaleChannelId" disabled="$root.activeCart.isRefund() &amp;&amp; !$root.activeCart.IsQuickReturn">
                                <div id="saleChannel"><span title="" style="" class="k-widget k-dropdown k-header dropdown-control dropdown-control-sm salechannel-dropdown-control" unselectable="on" role="listbox" aria-haspopup="true" aria-expanded="false" tabindex="2001" aria-owns="" aria-disabled="false" aria-busy="false" aria-activedescendant="0035efea-cb39-4d18-acd6-9bddaac2acd6"><span unselectable="on" class="k-dropdown-wrap k-state-default"><span unselectable="on" class="k-input"><i title="Kênh bán: Bán trực tiếp" class="fas fa-walking"></i></span><span unselectable="on" class="k-select"><span unselectable="on" class="k-icon k-i-arrow-s">select</span></span></span><select class="dropdown-control dropdown-control-sm salechannel-dropdown-control" kendo-drop-down-list="vm.saleChannelDropDown" k-options="vm.saleChannelOptions" k-ng-model="vm.scId" k-value-primitive="true" ng-disabled="vm.disabled" data-role="dropdownlist" style="display: none;">
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
                                <span class="k-widget k-datepicker k-header" style=""><span class="k-picker-wrap k-state-disabled"><input kendo-date-picker="" k-ng-model="$root.activeCart.PurchaseDate" k-options="vm.purchaseDateOptions" ng-disabled="($root.session.Setting.NotAllowModifyPurchaseDate &amp;&amp; (($root.activeCart.isInvoice() &amp;&amp; $root.session.Setting.NotAllowModifyInvoiceDate) || ($root.activeCart.isOrder() &amp;&amp; $root.session.Setting.NotAllowModifyOrderDate) || ($root.activeCart.isRefund() &amp;&amp; $root.session.Setting.NotAllowModifyReturnDate))) || $root.activeCart.isUpdated()" placeholder="28/07/2024" id="PurchaseDateCart" tabindex="2002" ng-paste="vm.onPaste($event.originalEvent)" data-role="datepicker" style="width: 100%;" type="text" class="k-input" role="combobox" aria-expanded="false" aria-owns="PurchaseDateCart_dateview" aria-disabled="true" disabled="disabled"><span unselectable="on" class="k-select" role="button" aria-controls="PurchaseDateCart_dateview"><span unselectable="on" class="k-icon k-i-calendar">select</span></span></span></span>
                                <span class="k-widget k-timepicker k-header" style=""><span class="k-picker-wrap k-state-disabled"><input kendo-time-picker="" k-ng-model="$root.activeCart.PurchaseTime" k-options="vm.purchaseTimeOptions" ng-disabled="($root.session.Setting.NotAllowModifyPurchaseDate &amp;&amp; (($root.activeCart.isInvoice() &amp;&amp; $root.session.Setting.NotAllowModifyInvoiceDate) || ($root.activeCart.isOrder() &amp;&amp; $root.session.Setting.NotAllowModifyOrderDate) || ($root.activeCart.isRefund() &amp;&amp; $root.session.Setting.NotAllowModifyReturnDate))) || $root.activeCart.isUpdated()" placeholder="22:17" id="PurchaseTimeCart" tabindex="2003" data-role="timepicker" type="text" class="k-input" role="combobox" aria-expanded="false" aria-owns="PurchaseTimeCart_timeview" aria-disabled="true" style="width: 100%;" disabled="disabled"><span unselectable="on" class="k-select" role="button" aria-controls="PurchaseTimeCart_timeview"><span unselectable="on" class="k-icon k-i-clock">select</span></span></span></span>
                            </date-time-selector-component>
                        </div>
                    </div>
                    <div class="customer-search"><!---->
                        <customer-search-component customer="$root.activeCart.Customer" cdisabled="$root.activeCart.CustomerDisabled" on-change="vm.onChangeCustomer(customer)" ng-if="$root.saleScreenMode === 1 || $root.activeCart.isRefund() || $root.activeCart.isWarrantyCart()" ng-show="((!$root.activeCart.isRefund() || $root.activeCart.IsQuickReturn || root.activeCart.IsReturnImport) &amp;&amp; !$root.activeCart.OrderId &amp;&amp; !$root.activeCart.WarrantyOrderId) || $root.activeCart.Customer">
                            <div class="autocomplete-full"><!---->
                                <div ng-if="!vm.currentCustomer" class="autocomplete-input">
                                    <div kv-autocomplete="vm.autocomplete" ng-model="vm.customerSearchTerm" template-id="customerItemTempl" data="vm.customers" attr-placeholder="Tìm khách hàng (F4)" attr-iconclass="fal fa-search" attr-inputclass="tabBut_0 form-control-custom" attr-inputid="customerSearchInput" on-tindex="vm.tabIndex+1" on-type="vm.searchTermChanged" on-select="vm.changeCustomer" kv-disabled="vm.cdisabled" kv-message="'Không tìm thấy khách hàng phù hợp' | translate" class="ng-pristine ng-untouched ng-valid ng-empty">
                                        <div class="autocomplete " id="">
                                            <i class="fal fa-search"></i>
                                            <input type="text" autocomplete="off" ng-model="vm.searchParam" placeholder="Tìm khách hàng (F4)" class="form-control tabBut_0 form-control-custom ng-empty" id="customerSearchInput" ng-disabled="vm.kvDisable" kv-select-text="" tabindex="2010" kv-tab-index="">
                                            <div class="output-complete ng-hide is-offline" ng-class="{'has-add-new':vm.getStateAddNewProduct(vm.isAddNew, vm.listItems), 'show-only': vm.getStateSelectMulti(vm.listItems,vm.isMultiSelect), 'is-offline': !vm.isOnline}" ng-show="vm.completing">
                                                <ul ng-hide="vm.searchParam &amp;&amp; vm.suggestions.length == 0"><!----></ul>
                                                <div class="not-found ng-hide" ng-show="vm.searchParam &amp;&amp; vm.suggestions.length == 0">Không tìm thấy khách hàng phù hợp</div>
                                                <a class="add-new-product ng-hide" ng-click="vm.onAddNew()" ng-show="vm.isAddNew &amp;&amp; !vm.getStateSelectMulti(vm.listItems,vm.isMultiSelect)" href="javascript:;">+ Thêm mới hàng hóa</a>
                                                <div class="multi-select-actions ng-hide" ng-show="vm.getStateSelectMulti(vm.listItems, vm.isMultiSelect)">
                                                    <span><span class="total-product">false</span> <span translate=""><span>sản phẩm</span></span></span>
                                                    <a class="btn btn-primary add-list-product" ng-click="vm.addMultiItemsToCart(vm.listItems)" href="javascript:;">Thêm vào đơn</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div><!---->
                                    <button ng-if="$root.authSvc.has($root.session.Privileges.Customer_Create) &amp;&amp; !vm.isvoucher &amp;&amp; !vm.isUpdateInvoiceWithShippingDelivery()" class="btn-icon btn-icon-default" title="Thêm khách hàng" ng-hide="vm.currentCustomer" ng-click="vm.openNewCustomerWindow()" id="addCustomer" kv-tab-index="" tabindex="2011">
                                        <i class="far fa-plus"></i></button><!---->
                                </div><!----><!---->
                            </div>

                        </customer-search-component><!----><!----></div>
                    <pricebook-component ng-show="vm.priceBookLength >= 2" id="pricebook1" pricebook="$root.activeCart.SelectedPricebook" customer="$root.activeCart.Customer" on-change="vm.onChangePriceBook(pricebook)" read-only="($root.activeCart.isRefundWithInvoice() &amp;&amp; !$root.activeCart.hasExchange() || $root.activeCart.FromOrder &amp;&amp; !$root.activeCart.OrderNotUsePromotion)" uib-tooltip="Bảng giá chung" tooltip-placement="bottom" tooltip-append-to-body="true" class="ng-hide"><span title="" style="" class="k-widget k-dropdown k-header dropdown-control" unselectable="on" role="listbox" aria-haspopup="true" aria-expanded="false" tabindex="2014" aria-owns="pricebook_listbox" aria-disabled="false" aria-busy="false" aria-activedescendant="96945982-1650-44ec-868e-42d2982320e7"><span unselectable="on" class="k-dropdown-wrap k-state-default"><span unselectable="on" class="k-input"><span>Bảng giá
                                                chung</span></span><span unselectable="on" class="k-select"><span unselectable="on" class="k-icon k-i-arrow-s">select</span></span></span><select class="dropdown-control" id="pricebook" k-ng-model="vm.pricebook" ng-disabled="vm.readOnly" kendo-drop-down-list="vm.pricebookDropDown" k-options="vm.pricebookOptions" k-rebind="vm.pricebook" data-role="dropdownlist" style="display: none;">
                                        <option>Bảng giá chung</option>
                                    </select></span></pricebook-component>
                    <div class="customer-debt-point">
                        <div class="form-group-inline" ng-hide="(($root.activeCart.Customer.Debt | formatCurrency) == 0) &amp;&amp; (($root.activeCart.Customer.RewardPoint | formatNumberCurrency) == 0)">
                            <div class="form-group-row ng-hide" ng-show="$root.activeCart.Customer &amp;&amp; $root.activeCart.Customer.Debt &amp;&amp; $root.session.Privileges.CustomerAdjustment_Read">
                                <span class="tag tag-xxs tag-light-danger"><span translate=""><span>Nợ:</span></span> <!----> <!----> <!----><span ng-if="$root.activeCart.Customer.Debt === undefined || !vm.isOnline">---</span><!----></span>
                            </div>
                            <div class="form-group-row ng-hide" ng-show="$root.activeCart.Customer &amp;&amp; $root.activeCart.Customer.RewardPoint &amp;&amp; $root.activeCart.isShowCustomerPoint($root.session.Setting) &amp;&amp; $root.session.Setting.RewardPoint &amp;&amp; $root.session.Privileges.CustomerPointAdjustment_Read">
                                <span class="tag tag-xxs tag-light-success" uib-tooltip="0" tooltip-placement="right" tooltip-append-to-body="true"><span translate=""><span>Điểm:</span></span> <!----> <!----><span ng-if="$root.activeCart.Customer.RewardPoint === undefined || !vm.isOnline">---</span><!----></span>
                            </div>
                        </div><!---->
                    </div><!---->
                </div>
            </div><!---->
            <div class="col-right-content" ng-if="$root.saleScreenMode === 1 || $root.activeCart.isRefund() || $root.activeCart.isWarrantyCart()">
                <div class="wraper-payment-content"><!----></div><!---->
                <payment-component ng-if="!vm.isUsingMultiCurrency" active-cart="$root.activeCart">
                    <div class="wraper-payment "><!---->
                        <payment-invoice-component class="payment-invoice" is-delivery-tab="vm.isDeliveryTab" delivery="$root.activeCart.DeliveryDetail" ng-if="$root.activeCart.isInvoice()"><!---->
                            <div ng-if="$root.saleScreenMode != vm.saleMode.Delivery" class="payment-content">
                                <div class="form-group-inline form-labels-125">
                                    <div class="form-group-row form-group-row-sm">
                                        <label for="" class="col-form-label">Tổng tiền hàng</label>
                                        <div class="col-form-wrap d-flex">
                                            <span class="text-bg-default" ng-show="$root.session.Setting.UseTotalQuantity">14</span><!----><!---->
                                        </div>
                                    </div>
                                    <div class="form-group-row form-group-row-sm form-group-price">
                                        <div class="col-form-wrap font-size-medium text-right has-currency">21,373,800</div>
                                    </div>
                                </div>
                                <div class="form-group-inline form-labels-125">
                                    <div class="form-group-row form-group-row-sm">
                                        <label for="" class="col-form-label">Giảm giá</label>
                                        <div class="col-form-wrap">
                                            <span class="color-primary form-control-plaintext ratio-discount"></span>
                                            <span ng-show="($root.activeCart.DiscountByPromotionValue || $root.activeCart.DiscountByPromotionRatio) &amp;&amp; !($root.activeCart.FromOrder &amp;&amp; !$root.activeCart.OrderNotUsePromotion)" class="badge badge-promotion ng-hide">KM</span>
                                            <span ng-show="($root.activeCart.DiscountByPromotionValue || $root.activeCart.DiscountByPromotionRatio) &amp;&amp; $root.activeCart.FromOrder &amp;&amp; !$root.activeCart.OrderNotUsePromotion" class="badge badge-promotion disabled ng-hide">KM</span>
                                        </div>
                                    </div>
                                    <div class="form-group-row form-group-row-sm form-group-price cell-value-footer">
                                        <button class="form-control form-control-sm text-right font-size-medium form-discount" uib-popover-template="'discountInvoiceCartTpl.html'" popover-trigger="'outsideClick'" popover-placement="left" popover-class="popover-discount popover-arrow-right" tabindex="2018" ng-disabled="false">0</button>
                                    </div>
                                </div><!----><!----><!---->
                                <div class="form-group-inline form-labels-125 ng-hide" ng-show="$root.activeCart.PaidAmount > 0.0000001">
                                    <div class="form-group-row form-group-row-sm">
                                        <label class="col-form-label font-bold" translate=""><span>Khách đã trả</span></label>
                                    </div>
                                    <div class="form-group-row form-group-row-sm form-group-price">
                                        <button class="form-control form-control-sm font-size-medium text-right" ng-click="vm.showPaidAmount()" tabindex="2054">0</button>
                                    </div>
                                </div>
                                <div class="form-group-inline form-customer-debt form-labels-125">
                                    <div class="form-group-row form-group-row-sm">
                                        <label class="col-form-label font-bold" translate=""><span>Khách cần trả</span></label>
                                        <div class="col-form-wrap"><!----></div>
                                    </div>
                                    <div class="form-group-row form-group-row-sm">
                                        <span class="col-form-wrap amount-pay text-right">21,373,800</span></div>
                                </div>
                                <payment-customer-point-form-component cart="$root.activeCart" payments="$root.activeCart.Payments" on-change="vm.doUpdatePayingAmountNoPointVoucher(true)" kv-tab-index="vm.tabIndex + 76" payment-class="vm.paymentClass">
                                    <div ng-show="$root.activeCart.isShowPointMethod" class="ng-hide">
                                        <div class="form-group-inline form-labels-125">
                                            <div class="form-group-row"><label class="col-form-label">Điểm
                                                    <span class="color-primary">0</span></label>
                                                <div class="col-form-wrap form-control-plaintext">
                                                    <label class="check-switch"><input type="checkbox" tabindex="-1" ng-model="$root.activeCart.usePointForPayingAmount" ng-true-value="true" ng-false-value="false" ng-change="vm.onUsePointForPayingAmount()" ng-class="{active: $root.activeCart.usePointForPayingAmount}" class="ng-pristine ng-untouched ng-valid ng-empty">
                                                        <span></span></label></div>
                                            </div>
                                            <div class="form-group-row form-group-price">
                                                <input id="payingAmtPoint" tabindex="-1" class="form-control form-control-sm font-size-medium text-right payment-not-delivery ng-not-empty" type="text" ng-model="$root.activeCart.PointPayingAmount" kv-auto-numeric="{isTotalPrice: true, noRender: true}" ng-change="vm.doUpdatePointPayingAmount($root.activeCart.PointPayingAmount)" ng-disabled="!$root.activeCart.usePointForPayingAmount" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="form-group-inline form-labels-125 ng-hide" ng-show="$root.activeCart.usePointForPayingAmount">
                                            <div class="form-group-row">
                                                <label class="col-form-label" translate=""><span>Còn lại</span></label>
                                            </div>
                                            <div class="form-group-row form-group-price">
                                                <span class="col-form-wrap price-rest font-size-medium text-right">21,373,800</span>
                                            </div>
                                        </div>
                                    </div>
                                </payment-customer-point-form-component>
                                <div class="form-group-inline form-labels-125" ng-show="$root.activeCart.BalanceDue > 0.00001">
                                    <div class="form-group-row form-group-row-sm">
                                        <label class="col-form-label font-bold">Khách thanh toán</label></div>
                                    <div class="form-group-row form-group-row-sm form-group-price">
                                        <div class="col-form-wrap" ng-show="!vm.isOnlyShowTotalPaidAmount()">
                                            <input id="payingAmtInvoice" tabindex="2098" class="form-control form-control-sm text-right payingAmt ng-pristine ng-untouched ng-valid ng-not-empty" type="text" ng-model="$root.activeCart.PayingAmountNoPointVoucher" kv-auto-numeric="{isTotalPrice: true, noRender: true}" ng-change="vm.doUpdatePayingAmountNoPointVoucher()" ng-disabled="vm.isDisabled()">
                                        </div>
                                        <span class="form-control-plaintext text-right ng-hide" ng-show="vm.isOnlyShowTotalPaidAmount()">0</span>
                                    </div>
                                </div>
                                <div class="form-group-row form-check-methods" ng-show="$root.activeCart.BalanceDue > 0.00001 &amp;&amp; !vm.isOnlyShowTotalPaidAmount()">
                                    <div class="flex-1" ng-class="{'disabled': $root.activeCart.isHideSinglePayment}">
                                        <label class="form-check form-check-inline"><input class="form-check-input ng-pristine ng-untouched ng-valid ng-not-empty" type="radio" ng-value="0" ng-model="$root.activeCart.singlePaymentType" tabindex="2099" ng-click="vm.changeSinglePaymentType('Cash')" name="238" value="0">
                                            <span class="text-check" translate=""><span>Tiền mặt</span></span></label>
                                        <label class="form-check form-check-inline" id="bank-transfer"><input class="form-check-input ng-pristine ng-untouched ng-valid ng-not-empty" type="radio" ng-value="2" ng-model="$root.activeCart.singlePaymentType" tabindex="2100" ng-click="vm.changeSinglePaymentType('Transfer')" name="239" value="2">
                                            <span class="text-check" translate=""><span>Chuyển khoản</span></span></label>
                                        <label class="form-check form-check-inline"><input class="form-check-input ng-pristine ng-untouched ng-valid ng-not-empty" type="radio" ng-value="1" ng-model="$root.activeCart.singlePaymentType" tabindex="2101" ng-click="vm.changeSinglePaymentType('Card')" name="240" value="1">
                                            <span class="text-check" translate=""><span>Thẻ</span></span></label> <!----><label class="form-check form-check-inline" ng-if="$root.session.UsingWalletPaymentToggle"><input class="form-check-input ng-pristine ng-untouched ng-valid ng-not-empty" type="radio" ng-value="3" ng-model="$root.activeCart.singlePaymentType" tabindex="2102" ng-click="vm.changeSinglePaymentType('Wallet')" name="745" value="3">
                                            <span class="text-check" translate=""><span>Ví</span></span></label><!---->
                                    </div>
                                    <div>
                                        <button class="btn-icon btn-icon-default btn-multi-methods" ng-show="!vm.isOnlyShowTotalPaidAmount()" uib-tooltip="Thanh toán kết hợp" tooltip-placement="bottom" tooltip-append-to-body="true" tooltip-class="tooltip-popup-multi-currency tooltip-widget" ng-click="vm.doOpenPaymentPopup()" tabindex="2103">
                                            <i class="far fa-ellipsis-v"></i></button>
                                    </div>
                                </div>
                                <div class="form-group" ng-show="$root.activeCart.BalanceDue > 0.00001 &amp;&amp; !vm.isOnlyShowTotalPaidAmount()"><!---->
                                    <div class="suggest-money" ng-show="!$root.activeCart.isHideSinglePayment &amp;&amp; $root.activeCart.singlePaymentType === 0 &amp;&amp; $root.activeCart.payingAmountSuggestion.length > 0" ng-if="$root.cartDisplayOptions.suggestCustomerPay"><!---->
                                        <button ng-show="$root.activeCart.singlePaymentType === 0" ng-repeat="amt in $root.activeCart.payingAmountSuggestion track by $index" type="button" class="btn btn-md btn-outline-light btn-circle" ng-click="vm.selectSuggestionCashAmount(amt)" tabindex="2102">21,374,000</button><!---->
                                        <button ng-show="$root.activeCart.singlePaymentType === 0" ng-repeat="amt in $root.activeCart.payingAmountSuggestion track by $index" type="button" class="btn btn-md btn-outline-light btn-circle" ng-click="vm.selectSuggestionCashAmount(amt)" tabindex="2103">21,375,000</button><!---->
                                        <button ng-show="$root.activeCart.singlePaymentType === 0" ng-repeat="amt in $root.activeCart.payingAmountSuggestion track by $index" type="button" class="btn btn-md btn-outline-light btn-circle" ng-click="vm.selectSuggestionCashAmount(amt)" tabindex="2104">21,380,000
                                        </button><!---->
                                        <button ng-show="$root.activeCart.singlePaymentType === 0" ng-repeat="amt in $root.activeCart.payingAmountSuggestion track by $index" type="button" class="btn btn-md btn-outline-light btn-circle" ng-click="vm.selectSuggestionCashAmount(amt)" tabindex="2105">21,400,000
                                        </button><!---->
                                        <button ng-show="$root.activeCart.singlePaymentType === 0" ng-repeat="amt in $root.activeCart.payingAmountSuggestion track by $index" type="button" class="btn btn-md btn-outline-light btn-circle" ng-click="vm.selectSuggestionCashAmount(amt)" tabindex="2106">21,500,000
                                        </button><!----></div><!---->
                                    <div id="bankAccounts" ng-class="{'payment-soft-pos' : vm.isShowSoftPOS, 'payment-wallet' : $root.activeCart.singlePaymentType === 3 }" ng-show="!$root.activeCart.isHideSinglePayment &amp;&amp; $root.activeCart.singlePaymentType !== 0" class="payment-card-method col-form-wrap form-control-plaintext ng-hide"><!----><!----></div><!----><!---->
                                    <div class="form-group-inline form-labels-125 single-payment-box ng-hide" ng-show="$root.activeCart.isHideSinglePayment">
                                        <div class="form-group-row form-group-row-sm">
                                            <span>Thanh toán kết hợp</span></div>
                                        <div class="form-group-row form-group-row-sm"><!----><span ng-if="$root.activeCart.getCurrentPaymentMethodsToString().length > 0">Tiền mặt</span><!---->
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-inline form-labels-150 ng-hide" ng-show="vm.isShowDepositReturn()">
                                    <div class="form-group-row form-group-row-sm">
                                        <label class="col-form-label font-medium">Hoàn trả tạm ứng <!----><span class="sub-label" ng-if="$root.activeCart.getCurrentPaymentMethodsToString().length > 0">Tiền mặt</span><!---->
                                        </label>
                                        <div class="col-form-wrap">
                                            <button class="btn-icon btn-multi-methods" ng-click="vm.openMultiPaymentsFormForReturnDeposit()" title="Hoàn trả tạm ứng">
                                                <i class="far fa-ellipsis-v"></i></button>
                                        </div>
                                    </div>
                                    <div class="form-group-row form-group-row-sm form-group-price">
                                        <div class="col-form-wrap">
                                            <input id="payingDepositReturn" class="form-control fs-18 form-control-sm text-right ng-pristine ng-untouched ng-valid ng-empty" type="text" ng-model="$root.activeCart.DepositReturn" kv-auto-numeric="{isProductPrice: true}" ng-change="vm.doUpdatePayingAmount()">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-labels-250 form-pay-customers">
                                    <div class="form-group-row form-group-row-sm form-check-payment form-check-methods ng-hide" ng-show="vm.isShowChangeAmount()">
                                        <label translate="" ng-show="vm.isShowReturnMoney()" class="col-form-label"><span>Tiền thừa trả khách</span></label>
                                        <label class="col-form-label ng-hide" ng-show="$root.activeCart.CustomerId &amp;&amp; ($root.activeCart.BalanceDue - $root.activeCart.PayingAmount) > 0.000001"><!----><a ng-if="vm.isOnline &amp;&amp; !$root.activeCart.isUpdated()" class="link-color add-to-debt" translate="" ng-click="vm.makepaymentSurplus()" tabindex="2119" ng-keypress="$event.which === 13 &amp;&amp; vm.makepaymentSurplus()"><span>Tính vào công nợ</span></a><!----> <!---->
                                        </label>
                                        <div class="col-form-label ng-hide" ng-show="$root.activeCart.CustomerId &amp;&amp; ($root.activeCart.PayingAmount - $root.activeCart.BalanceDue) > 0.000001 &amp;&amp; !vm.isOnlyPointPayment">
                                            <label class="form-check"><input class="form-check-input ng-pristine ng-untouched ng-valid ng-not-empty" type="radio" ng-model="$root.activeCart.addToAccount" ng-disabled="$root.activeCart.isUpdated() &amp;&amp; $root.activeCart.IsHideReturnCustomerMoney" value="0" tabindex="2119" name="242">
                                                <span class="text-check" translate=""><span>Tiền thừa trả khách</span></span></label>
                                        </div>
                                        <div class="col-form-wrap form-control-plaintext payingAmt font-size-medium text-right ng-hide" ng-show="vm.isShowChangeAmount() &amp;&amp; $root.activeCart.ChangeAmount >= 0">0</div>
                                        <div class="col-form-wrap form-control-plaintext payingAmt font-size-medium text-right ng-hide" ng-show="vm.isShowChangeAmount() &amp;&amp; $root.activeCart.ChangeAmount < 0">- 0</div>
                                    </div>
                                </div>
                                <div ng-show="vm.isShowRegister()" class="wrap-add-bank-account"><!----></div>
                                <div class="form-labels-250">
                                    <div class="form-group-row form-group-row-sm form-check-payment form-check-methods ng-hide" ng-show="$root.activeCart.CustomerId &amp;&amp; ($root.activeCart.PayingAmount - $root.activeCart.BalanceDue) > 0.000001 &amp;&amp; !vm.isOnlyPointPayment">
                                        <div class="col-form-label">
                                            <label class="form-check"><input class="form-check-input ng-pristine ng-untouched ng-valid ng-not-empty" type="radio" ng-model="$root.activeCart.addToAccount" value="1" tabindex="2120" name="243"> <!----><span class="text-check" ng-if="$root.activeCart.addToAccount == '0' || !vm.isOnline || $root.activeCart.isUpdated()" translate=""><span>Tính vào công nợ</span></span><!----> <!---->
                                            </label></div>
                                    </div>
                                </div>
                            </div><!----><!----><!---->
                        </payment-invoice-component><!----><!----><!----><!----><!----></div>
                </payment-component><!----><!----><!---->
            </div><!---->
            <div class="products product-list product-list--change ng-hide" ng-show="$root.saleScreenMode === 2 &amp;&amp; !$root.activeCart.isRefund() &amp;&amp; !$root.activeCart.isWarrantyCart()">
            </div>>

            <div ng-if="$root.activeCart.isInvoice() &amp;&amp; $root.saleScreenMode === 1" class="cart-actions"><!---->
                <button skip-disable="" type="button" class="btn btn-primary btn-xl" ng-click="vm.debouncedSaveTransaction()" id="saveTransaction" tabindex="2464">Thanh toán</button>
            </div><!---->
        </div><!---->
    </div>
@endsection

@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            //Show 'product list' render from VIEW
            $('#productSearchInput').focus(function() {
                $('#toggleProduct').show();
            });

            //Show product list from API
            $('#productSearchInput').on('keyup', function() {
                $('#toggleProduct').removeClass('ng-hide');
                var query = $(this).val();
                $.ajax({
                    url: "{{ route('search') }}",
                    type: "GET",
                    data: {'query': query},
                    success: function(data) {
                        $('#productSearchList').empty();
                        $.each(data, function(index, product) {
                            const formatter = new Intl.NumberFormat('vi-VN', {
                                style: 'currency',
                                currency: 'VND',
                            });
                            const price = product.product_sku[0].sale_price;
                            const formattedPrice = formatter.format(price);

                            $('#productSearchList').append(' <li class="addProduct output-item is-on-cart " data-id="'+ product.id +'" data-name="'+ product.name +'" data-price="'+ product.product_sku[0].sale_price +'"   index="0" val="Áo vest nam màu xanh lá" >'+
                                '<div class="output-thumb-wrap">'+
                                '<div class="output-thumb">'+
                                '<button class="output-product-lk" >'+
                                '<i class="far fa-ellipsis-h"></i>'+
                                '</button> <!----><img loading="lazy" src="https://cdn-app.kiotviet.vn/sample/fashion/1.png"><!----> <!---->'+
                                '</div>'+
                                '<div class="output-thumb-secondary"><i class="fas fa-image img-default"></i>'+
                                '</div>'+
                                '</div> <!---->'+
                                '<div class="output-body" ng-if="suggestion.Id">'+
                                '<div class="output-info"><h5 class="output-name font-medium">'+
                                '<span class="">'+ product.name +'</span>'+
                                '<span class="tag tag-xxs tag-light-warning"></span>'+
                                '<span class="tag tag-xxs tag-light-primary"></span></h5> <!---->'+
                                '<div ng-if="!vm.isLimitViewPriceWarrantyOrder" class="output-price">'+
                                '<span class="product-price-new has-currency">'+ formattedPrice +'</span>'+
                                '</div><!---->'+
                                '</div>'+
                                '<div class="output-value"><span class="output-code">SP000'+ product.id +'</span>'+
                                '</div> <!---->'+
                                ' <div class="output-unit" ng-if="$root.session.User.IsAdmin || $root.session.Privileges.Invoice_ReadOnHand">'+
                                '<span class="output-tag"> <span translate=""><span>Tồn</span></span>: <span class="onHandValue">0</span> </span>'+
                                '<span class="output-tag ng-hide" ng-show="vm.isUseOrderSupplier"> <span translate=""><span>Đặt NCC</span></span>: <span class="priceValue">0</span> </span>'+
                                '<span class="output-tag"> <span translate=""><span>KH đặt</span></span>: <span class="reservedValue"> 0 </span> </span>'+
                                '</div><!---->'+
                                '</div><!----> <!---->'+
                                '</li>');
                        });
                    }
                });
            });

            $(document).click(function(event) {
                if (!$(event.target).closest('#productSearchInput, #productSearchList').length) {
                    $('#toggleProduct').hide();
                }
                if (!$(event.target).closest('#sale-menu-bar').length) {
                    $('#sale-menu-bar').removeClass('open');
                }
            });

            //Show menu bar header
            $('#sale-menu-bar').click(function() {
                $('#sale-menu-bar').addClass('open');
            });

            //Add product to cart
            $('#productSearchList').on('click', '.addProduct', function(event) {
                event.stopPropagation();
                let id = $(this).data('id');
                let name = $(this).data('name');
                let price = $(this).data('price');

                var cartItem = $('#cartListProduct').find('.carts-item[data-id="' + id + '"]');
                if (cartItem.length > 0) {
                    var quantityElem = cartItem.find('.quantity-input');
                    var quantity = parseInt(quantityElem.val());
                    quantityElem.val(quantity + 1);
                }
                else{
                    let item = '<div class="carts active cart-materials" style="margin-bottom: 3px;">' +
                        '<div class="carts-item" data-id="' + id + '">' +
                        '<div class="carts-left">' +
                        '<div class="cell-order" >3</div>' +
                        '<div class="cell-actions carts-actions" >' +
                        '<button class="btn-icon btn-icon-default"  title="Xóa hàng hóa" tabindex="4">' +
                        '<i class="far fa-trash-alt"></i></button>' +
                        '</div>' +
                        '</div>' +
                        '<div class="carts-content">' +
                        '<div class="carts-container">' +
                        '<div class="carts-content-info">' +
                        '<div class="carts-content-top">' +
                        '<div class="cell-code"  title="Tồn: 0  − KH đặt: 0">'+id+'</div><!---->' +
                        '<div class="cell-info">' +
                        '<div class="info-content" ><span title="Tồn: 0 − KH đặt: 0">'+name+'</span> ' +
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
                        '<input id="note-cartitem-0" type="number" value="1"   class="form-control form-control-sm form-control-invoice note-cartitem-0 ng-not-empty form-control-error quantity-input">' +
                        '<button type="button" class="btn-icon btn-icon-bg-default up plus">' +
                        '<i class="fal fa-plus"></i>' +
                        '</button>' +
                        ' <span class="sub-label ng-hide" >/ 0</span>' +
                        '</div>' +
                        '</div>' +
                        '<div class="cell-auto" ></div>' +
                        ' <div class="cell-change-price" ><!---->' +
                        '<div class="popup-anchor" >' +
                        '<button class="form-control form-control-sm text-right cart-item-0"  >'+price+'</button>' +
                        '</div>' +
                        '</div>' +
                        '<div class="cell-change-price" ng-if="$root.cartDisplayOptions.total"><!----><!---->' +
                        '<div class="cell-total text-right" ng-if="!$root.cartDisplayOptions.changeSubTotal || $root.activeCart.Type == vm.returnCartStatus || $root.activeCart.Type == vm.newReturnCartStatus">' +
                        '<span class="cart-price-new has-currency">3,699,000</span>' +
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
                        ' </div>' +
                        '<div class="cell-actions carts-actions"><!----><a class="btn-icon btn-icon-default"  href="#" tabindex="11"><i class="far fa-plus"></i></a>' +
                        '<a class="btn-icon btn-icon-default btn-more"  href="#" tabindex="12" ><i class="far fa-ellipsis-v"></i></a>' +
                        '</div>' +
                        '</div>' +
                        '<div class="carts-item row-serial-child ng-hide">' +
                        '<div class="carts-left"><!---->' +
                        '<div class="cell-order"></div><!----><!---->' +
                        '<div class="cell-actions carts-actions" ></div><!----><!---->' +
                        '</div>' +
                        '<div class="carts-content">' +
                        '<div class="carts-container">' +
                        '<div class="cell-name">' +
                        '<tags-input placeholder="Nhập Serial/Imei"  class="serial-tags ng-pristine ng-untouched ng-valid ng-empty ng-valid-max-tags ng-valid-min-tags ng-valid-leftover-text" min-length="1"  display-property="SerialNumber">' +
                        '<div class="host" tabindex="-1" >' +
                        '<div class="tags" >' +
                        '<div class="tag-list"><!----></div>' +
                        '<input class="input ng-pristine ng-untouched ng-valid ng-empty ng-hide"><span class="input" style="visibility: hidden; width: auto; white-space: pre; display: none;">NhậpSerial/Imei</span>' +
                        '</div>' +
                        '<a tabindex="6"  class="btn btn-control btn-add-serial ng-hide"  translate=""><span>Chọn IMEI</span></a>' +
                        '</div>' +
                        '</tags-input>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                    $('#cartListProduct').append(item);
                }
            });


            $('#cartListProduct').on('click','.plus', function(){
                var quantityInput = $(this).siblings('.quantity-input');
                var currentQuantity = parseInt(quantityInput.val());
                quantityInput.val(currentQuantity + 1);
            });

            $('#cartListProduct').on('click','.minus', function(){
                var quantityInput = $(this).siblings('.quantity-input');
                var currentQuantity = parseInt(quantityInput.val());
                if(currentQuantity > 1){
                    quantityInput.val(currentQuantity - 1);
                }
            });


        });
    </script>
@endpush