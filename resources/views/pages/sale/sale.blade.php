@extends('layouts.sale.app')
@section('content')
<div class="page-content expand-delivery" ng-class="{' has-exchange':$root.activeCart.hasExchange(), 'row-revert' : $root.activeCart.isWarrantyCart()}">
    <div class="col-left " ng-show="!$root.activeCart.isWarrantyCart()">
        <div class="cart-container cart-container-scroll" ng-class="{' carts-refund':$root.activeCart.isRefund(), 'enable-sort-product' : $root.cartDisplayOptions &amp;&amp; $root.cartDisplayOptions.usingSortProduct}"><!---->
            <cart-products-component on-select-product="vm.onSelectProduct(selectedProduct)">
                <div class="welcome-page ng-hide" ng-hide="$root.activeCart.Items.length > 0 || $root.activeCart.isRefund()"><!----></div>
                <div class="carts-list show-duplicate-item" id="cartListProduct" ng-class="{'show-duplicate-item' : $root.cartDisplayOptions.duplicateCartItem}"><!---->
                    <div class="carts active cart-materials" ng-repeat="item in vm.getItems() track by item.Uuid" ng-class="{'active': (($root.cartItemsOrder &amp;&amp; $last) || (!$root.cartItemsOrder &amp;&amp; $first)), 'cart-materials': vm.isShowCalSizeToggle, 'carts-item-sortable': $root.cartDisplayOptions.usingSortProduct}" kv-scroll-cart-items="" kv-unfocus="">
                        <div class="carts-item">
                            <div class="carts-left"><!---->
                                <div class="cell-order" ng-if="$root.cartDisplayOptions.numberOrder || $root.saleScreenMode === 3">3</div><!----><!---->
                                <div class="cell-actions carts-actions" ng-if="$root.saleScreenMode === 1 || $root.saleScreenMode === 2 || $root.activeCart.isRefund()">
                                    <button class="btn-icon btn-icon-default" ng-show="vm.isShowRemoveButton($root.activeCart, item)" ng-click="vm.removeProduct(item)" title="Xóa hàng hóa" tabindex="4" kv-next-focus="#productSearchInput" kv-popover-close="">
                                        <i class="far fa-trash-alt"></i></button>
                                </div><!----><!---->
                            </div>
                            <div class="carts-content">
                                <div class="carts-container">
                                    <div class="carts-content-info">
                                        <div class="carts-content-top"><!---->
                                            <div class="cell-code" ng-class="{}" title="Tồn: 0  − KH đặt: 0" ng-if="$root.cartDisplayOptions.code">NAM003
                                            </div><!---->
                                            <div class="cell-info">
                                                <div class="info-content" ng-class="{'has-promotion-icon': vm.isShowPromotionIcon($root.activeCart, item), 'has-warranty-info' : item.ProductWarranty &amp;&amp; item.ProductWarranty.length > 0 &amp;&amp; ($root.activeCart.InvoiceId || !$root.activeCart.isRefund()), 'is-material' : vm.isShowCalSize() }"><span title="Tồn: 0 − KH đặt: 0">Áo
                                                                    vest nam màu xanh</span> <!----> <!---->
                                                    <button class="btn-icon btn-inventory" ng-if="vm.activeBranches &amp;&amp; vm.activeBranches.length > 0 &amp;&amp; (item.ProductType == 2 || (item.isComboProdHasNoPurchased() &amp;&amp; $root.session.Privileges.Invoice_ReadOnHand)) &amp;&amp; vm.networkService.state == 'online' &amp;&amp; ($root.session.Privileges.Invoice_ReadOnHand || vm.isUseOrderSupplier || vm.sellAllowOrder)" ng-click="vm.viewOnHandDetail(item)">
                                                        <i class="far fa-info-circle"></i>
                                                    </button><!----> <!----> <!----> <!----> <!----></div>
                                            </div><!----><span class="cell-units ng-hide" ng-if="$root.saleScreenMode === 1 || $root.saleScreenMode === 2 || $root.saleScreenMode === 3 || ($root.activeCart.isRefund())" ng-show="$root.session.Setting.UseMultiUnit &amp;&amp; item.Unit" tabindex="-1"><span title="" style="" class="k-widget k-dropdown k-header dropdown-control dropdown-control-primary dropdown-control-xs ng-hide" unselectable="on" role="listbox" aria-haspopup="true" aria-expanded="false" aria-owns="unit_listbox" aria-disabled="true" aria-busy="false"><span unselectable="on" class="k-dropdown-wrap k-state-disabled"><span unselectable="on" class="k-input"></span><span unselectable="on" class="k-select"><span unselectable="on" class="k-icon k-i-arrow-s">select</span></span></span><select class="dropdown-control dropdown-control-primary dropdown-control-xs ng-hide" ng-show="item.Units.length >= 2" id="unit" k-data-source="item.Units" k-ng-model="item.SelectedUnit" k-on-change="vm.unitChanged(item)" ng-disabled="vm.isDisableUnit($root.activeCart, item)" k-data-text-field="'Unit'" k-data-value-field="'Id'" kendo-drop-down-list="" data-role="dropdownlist" style="display: none;" disabled="disabled"></select></span><span class="k-dropdown dropdown-control dropdown-control-plaintext dropdown-control-primary dropdown-control-xs" ng-show="item.Units.length < 2"><span class="k-dropdown-wrap"><span class="k-input"></span></span></span></span><!---->
                                        </div>
                                        <div class="carts-content-bottom" ng-class="{'hide-change-price': !($root.cartDisplayOptions.price)}">
                                            <div class="cell-quantity error" ng-class="{error: (vm.itemHasWarning(item))}">
                                                <div class="quantity quantity-sm">
                                                    <button type="button" class="btn-icon btn-icon-bg-default down">
                                                        <i class="fal fa-minus"></i></button>
                                                    <input id="note-cartitem-0" type="text" ng-model="item.Quantity" ng-blur="vm.suggestBatch(item)" ng-change="vm.preCheckQuantityChange(item, $index)" ng-disabled="vm.isDisableQuantity($root.activeCart, item)" class="form-control form-control-sm form-control-invoice note-cartitem-0 ng-not-empty form-control-error" ng-class="{'form-control-error': item.Error &amp;&amp; vm.makeColorOnHand(item) &amp;&amp; !($root.activeCart.isCopied() &amp;&amp; $root.activeCart.Type === CartType.Return), 'form-control-invoice' : $root.activeCart.isInvoice(), 'form-control-order': $root.activeCart.isOrder()}" kv-auto-numeric="{ isQuantity: true, noRender: true }" tabindex="9" kv-disabled-number="false" kv-popover-close="" uib-tooltip="Tồn: 0Đặt: 0" tooltip-class="tooltip-product-quantity-information" tooltip-placement="bottom" tooltip-append-to-body="true">
                                                    <button type="button" class="btn-icon btn-icon-bg-default up">
                                                        <i class="fal fa-plus"></i></button>
                                                    <span class="sub-label ng-hide" ng-show="item.MaxQuantity &amp;&amp; item.MaxQuantity > 0">/ 0</span>
                                                </div>
                                            </div><!---->
                                            <div class="cell-auto" ng-if="!($root.saleScreenMode === 1)"></div><!----><!---->
                                            <div class="cell-change-price" ng-switch="" on="activeCart.Type" ng-if="$root.cartDisplayOptions.price"><!---->
                                                <div class="popup-anchor" ng-switch-default="">
                                                    <button class="form-control form-control-sm text-right cart-item-0" kv-popup-anchor="productPrice" ng-disabled="item.PriceByPromotion" uib-popover-template="'discountCartItemTpl.html'" popover-trigger="'outsideClick'" popover-placement="bottom" popover-enable="$root.session.Privileges.Invoice_ChangePrice || $root.session.Privileges.Invoice_ChangeUnitPrice" popover-append-to-body="true" popover-class="popover-change-price  popover-arrow-top" tabindex="10" ng-class="{'discount-color': (item.priceAfterDiscount() < item.Cost &amp;&amp; $root.session.Privileges.Product_Cost)}" kv-popover-close="">3,699,000</button>
                                                    <span class="sub-label label-discount ng-hide" ng-show="item.Discount> 0.00001"><!----> <!----><span ng-if="!item.DiscountRatio">- 0</span><!----> </span>
                                                </div>
                                                <!----><!---->
                                            </div><!----><!---->
                                            <div class="cell-change-price" ng-if="$root.cartDisplayOptions.total"><!----><!---->
                                                <div class="cell-total text-right" ng-if="!$root.cartDisplayOptions.changeSubTotal || $root.activeCart.Type == vm.returnCartStatus || $root.activeCart.Type == vm.newReturnCartStatus">
                                                    <span class="cart-price-new has-currency">3,699,000</span>
                                                </div><!---->
                                            </div><!---->
                                        </div>
                                    </div>
                                </div>
                                <div class="carts-secondary cell-secondary"><!----><!---->
                                    <div ng-show="$root.cartDisplayOptions.showCartItemNote || (!$root.cartDisplayOptions.showCartItemNote &amp;&amp; item.IsShowNote)" class="carts-note ng-hide">
                                        <textarea class="form-control form-control-custom item-note-0 ng-empty ng-valid-maxlength show-with-more" ng-class="{'show-all' : $root.cartDisplayOptions.showCartItemNote || (!$root.cartDisplayOptions.showCartItemNote &amp;&amp; item.IsShowNote), 'show-with-more' : !$root.cartDisplayOptions.showCartItemNote, 'has-content' : (item.Note.length > 0) &amp;&amp; ($root.cartDisplayOptions.showCartItemNote || (!$root.cartDisplayOptions.showCartItemNote &amp;&amp; item.IsShowNote))}" maxlength="300" spellcheck="false" ng-model="item.Note" tabindex="7" kv-auto-expand-input="" placeholder="Ghi chú..." ng-change="vm.changeItemNote(item)">			</textarea>
                                    </div>
                                    <div ng-show="item.NoteMaterial.length > 0 || (item.QuantityConversion) || item.IsEditingNoteMaterial" class="carts-note carts-note-material ng-hide" ng-class="{'has-note-material' : item.NoteMaterial.length > 0}">
                                        <textarea class="form-control form-control-custom item-note-0 ng-empty ng-valid-maxlength show-with-more" ng-class="{'show-all' : $root.cartDisplayOptions.showCartItemNote || (!$root.cartDisplayOptions.showCartItemNote &amp;&amp; item.IsShowNote), 'show-with-more' : !$root.cartDisplayOptions.showCartItemNote, 'has-content' : (item.NoteMaterial.length > 0) &amp;&amp; ($root.cartDisplayOptions.showCartItemNote || (!$root.cartDisplayOptions.showCartItemNote &amp;&amp; item.IsShowNote))}" spellcheck="false" maxlength="500" ng-model="item.NoteMaterial" ng-change="item.onChangeNoteMaterial()" tabindex="7" placeholder="Ghi chú tính toán..." kv-auto-expand-input="">			</textarea>
                                        <a class="form-conversion-unit text-link ng-hide" ng-show="item.QuantityConversion" href="javascript:void(0)" ng-click="vm.calUnitConversion(item)"><span translate=""><span>Tương đương</span></span>
                                            <span class="font-bold"> </span></a></div>
                                </div>
                            </div>
                            <div class="cell-actions carts-actions"><!----><a class="btn-icon btn-icon-default" ng-click="vm.duplicateCartItem(item)" ng-if="$root.cartDisplayOptions.duplicateCartItem &amp;&amp; vm.isShowDupplicateItemBtn($root.activeCart, item)" href="#" tabindex="11"><i class="far fa-plus"></i></a><!---->
                                <a class="btn-icon btn-icon-default btn-more" ng-class="{'margin-left-auto' : !($root.cartDisplayOptions.duplicateCartItem &amp;&amp; vm.isShowDupplicateItemBtn($root.activeCart, item)) }" uib-popover-template="'extFunction-cartrowproduct.html'" popover-trigger="'outsideClick'" popover-class="cart-list-action " popover-placement="bottom-right" popover-append-to-body="true" popover-is-open="item.isOpenPopover" ng-click="item.isOpenPopover = true" href="#" tabindex="12" kv-up-down=""><i class="far fa-ellipsis-v"></i></a>
                            </div>
                        </div>
                        <div ng-show="item.IsLotSerialControl &amp;&amp; !($root.activeCart.isOrder())" class="carts-item row-serial-child ng-hide">
                            <div class="carts-left"><!---->
                                <div class="cell-order" ng-if="$root.cartDisplayOptions.numberOrder || $root.saleScreenMode === 3"></div><!----><!---->
                                <div class="cell-actions carts-actions" ng-if="$root.saleScreenMode === 1 || $root.saleScreenMode === 2 || $root.activeCart.isRefund()"></div><!----><!---->
                            </div>
                            <div class="carts-content">
                                <div class="carts-container">
                                    <div class="cell-name">
                                        <tags-input placeholder="Nhập Serial/Imei" ng-model="item.Serials" class="serial-tags ng-pristine ng-untouched ng-valid ng-empty ng-valid-max-tags ng-valid-min-tags ng-valid-leftover-text" add-from-autocomplete-only="true" is-read-only="!vm.isShowSerial($root.activeCart, item)" replace-spaces-with-dashes="false" on-tag-added="vm.onSerialsTagChanged(item)" on-tag-removed="vm.onSerialsTagChanged(item)" ng-focus="vm.showSuggestionSerial(item)" key-property="SerialNumber" enableeditinglasttag="true" min-length="1" kv-tab-index="vm.tabIndex+ $index*200 + 2" display-property="SerialNumber">
                                            <div class="host" tabindex="-1" ti-transclude-append="">
                                                <div class="tags" onclick=" $(this).find('input:first').focus();" ng-class="{focused: hasFocus}">
                                                    <div class="tag-list"><!----></div>
                                                    <input class="input ng-pristine ng-untouched ng-valid ng-empty ng-hide" ng-show="(!tagList.items || tagList.items.length < options.thresholdToShowInput) &amp;&amp; !isReadOnly" autocomplete="off" ng-model="newTag.text" ng-change="eventHandlers.input.change(newTag.text)" ng-keydown="eventHandlers.input.keydown($event)" ng-focus="eventHandlers.input.focus($event)" ng-click="eventHandlers.input.click($event)" ng-blur="eventHandlers.input.blur($event)" ng-paste="eventHandlers.input.paste($event,$(this))" ng-trim="false" ng-class="{'invalid-tag': newTag.invalid}" ng-disabled="disabled" ti-bind-attrs="{type: options.type, placeholder: options.placeholder, spellcheck: options.spellcheck, id:options.inputId}" ti-autosize="" tabindex="5" type="text" placeholder="Nhập Serial/Imei" spellcheck="true" style="width: 107px;"><span class="input" style="visibility: hidden; width: auto; white-space: pre; display: none;">Nhập
                                                                    Serial/Imei</span>
                                                </div>
                                                <a tabindex="6" ng-show="vm.isShowSerial($root.activeCart, item)" ng-click="vm.showSerialPopup(item)" class="btn btn-control btn-add-serial ng-hide" ng-keydown="$event.which === 13 &amp;&amp; vm.showSerialPopup(item)" translate=""><span>Chọn IMEI</span></a>
                                                <auto-complete has-alt-tag="false" source="item.ProductSerials" display-property="SerialNumber" min-length="0" load-on-focus="true" load-on-empty="true" debounce-delay="10" template="selectImeiDropdown.view.html"><!----></auto-complete>
                                            </div>
                                        </tags-input>
                                    </div>
                                </div>
                            </div>
                        </div><!----><!----><!---->
                        <cart-gift-products-component class="cart-gift-products-component" gift-products="item.GiftCartItems" cart-approved-promotion="item.ApprovedPromotions" tab-index="vm.tabIndex + $index*200 + 50" promo-for-cart="false" ng-if="($root.activeCart.isInvoice() || $root.activeCart.isOrder())"><!----><!----><!---->

                        </cart-gift-products-component><!---->
                    </div><!---->
                </div><!---->
                <div ng-class="{'hide-order':!($root.cartDisplayOptions.numberOrder), 'hide-code':!($root.cartDisplayOptions.code), 'hide-img':!($root.cartDisplayOptions.productImg), 'hide-change-price':!($root.cartDisplayOptions.price), 'hide-price':!($root.cartDisplayOptions.total), 'hide-add-row':!($root.cartDisplayOptions.clone) }" class="hide-img hide-add-row"></div>

            </cart-products-component>
            <cart-refund-products-component ng-show="$root.activeCart.isRefund() &amp;&amp; $root.session.Privileges.Invoice_Create" cache-serials="vm.currentSerialStatus" class="ng-hide">
                <div class="search-refund" ng-show="!$root.session.IsActiveGppDrugStore || !vm.isSearchSamplePrescription">
                    <product-search-component on-select-product="vm.onSelectProduct(selectedProduct, weight)" on-select-grouped-products="vm.onSelectProduct(selectedProduct, weight)" placeholder="Tìm hàng đổi (F7)" hide-quantity="false" search-input-id="newItemsSearch" quantity-id="newItemQuantity" is-new-search="true" toggle-search-sample-prescription="vm.toggleSearchSamplePrescription()">
                        <div class="products-search" ng-class="{'product-search-medicine' : $root.session.IsActiveGppDrugStore, 'is-eScale' : (vm.settings.UseElectronicScales &amp;&amp; !$root.activeCart.isWarrantyOrder()), 'is-warranty-order' : $root.activeCart.isWarrantyOrder(),'is-multiSelect': $root.cartDisplayOptions.multiSelectProduct }">
                            <div class="autocomplete-wrapper ng-pristine ng-untouched ng-valid ng-empty" kv-autocomplete="vm.autocomplete" kv-disabled="vm.isDisabled" ng-model="vm.productSearchTerm" attr-placeholder="Tìm hàng đổi (F7)" template-id="productItemTempl" attr-inputid="newItemsSearch" data="vm.products" on-type="vm.searchTermChanged" attr-iconclass="fal fa-search" attr-inputclass="form-control-custom" on-select="vm.onProductSelected" on-select-product="vm.onSelectProduct" on-select-empty="vm.onEmptyListSelect" on-select-no-match="vm.onNoMatchCode" on-warning-select="vm.warningMaximumSelectItems" on-add-new="vm.onAddNew" is-add-new="$root.session.Privileges.Product_Create &amp;&amp; vm.isAddNew" no-auto-select="vm.isHideMode" is-scale="vm.search_method == 'search-3'" on-tindex="vm.tabIndex" kv-show-popup="vm.showRelatedProductPopup" is-bar-scanner="vm.isBarScanner" is-read-onhand="vm.isReadOnHand" is-tab-change="vm.isTabChange" is-use-order-supplier="vm.isUseOrderSupplier" is-multi-select-mode="vm.multiSelectProduct" is-limit-view-price-warranty-order="vm.isLimitViewPriceWarrantyOrder" is-online="vm.isOnline" search-delay-time="620" pholder="vm.placeholder" ,="" is-using-warehouse="vm.isUsingWarehouse">
                                <div class="autocomplete " id="">
                                    <i class="fal fa-search"></i>
                                    <input type="text" autocomplete="off" ng-model="vm.searchParam" placeholder="Tìm hàng đổi (F7)" class="form-control form-control-custom ng-empty" id="newItemsSearch" ng-disabled="vm.kvDisable" kv-select-text="" tabindex="1000" kv-tab-index="">
                                    <div class="output-complete ng-hide" ng-class="{'has-add-new':vm.getStateAddNewProduct(vm.isAddNew, vm.listItems), 'show-only': vm.getStateSelectMulti(vm.listItems,vm.isMultiSelect), 'is-offline': !vm.isOnline}" ng-show="vm.completing">
                                        <ul ng-hide="vm.searchParam &amp;&amp; vm.suggestions.length == 0"><!-- select multi --> <!----> <!-- select only --> <!----></ul>
                                        <div class="not-found ng-hide" ng-show="vm.searchParam &amp;&amp; vm.suggestions.length == 0">Không tìm thấy kết quả nào phù hợp</div>
                                        <a class="add-new-product ng-hide" ng-click="vm.onAddNew()" ng-show="vm.isAddNew &amp;&amp; !vm.getStateSelectMulti(vm.listItems,vm.isMultiSelect)" href="javascript:;">+ Thêm mới hàng hóa</a>
                                        <div class="multi-select-actions ng-hide" ng-show="vm.getStateSelectMulti(vm.listItems, vm.isMultiSelect)">
                                            <span><span class="total-product">false</span> <span translate=""><span>sản phẩm</span></span></span>
                                            <a class="btn btn-primary add-list-product" ng-click="vm.addMultiItemsToCart(vm.listItems)" href="javascript:;">Thêm vào đơn</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <button ng-disabled="vm.isDisabled" id="add-warranty-product" class="btn-icon btn-add-warranty btn-scales ng-hide" title="Chọn từ hàng bảo hành đã bán ra" ng-click="vm.addWarrantyProduct()" ng-show="$root.activeCart.isWarrantyOrder()">
                                <i class="fas fa-file-alt"></i></button>
                            <button ng-disabled="vm.isDisabled" id="scanner_newItemsSearch" class="btn-icon btn-scales ng-hide" title="Chế độ sử dụng cân điện tử" ng-class="{enable:vm.search_method == 'search-3'}" ng-click="vm.toggleUseElectronicScales()" ng-show="vm.settings.UseElectronicScales &amp;&amp; !$root.activeCart.isWarrantyOrder()" tabindex="-1">
                                <i class="mask mask-scales"></i></button>
                            <button ng-show="$root.cartDisplayOptions.multiSelectProduct" class="btn-icon btn-toggle-select-multi ng-hide" ng-class="{'enable' : vm.multiSelectProduct}" title="Chế độ chọn nhiều hàng hóa" ng-click="vm.toggleMultiSelect()">
                                <i class="fas fa-tasks"></i></button>
                            <button ng-show="$root.session.IsActiveGppDrugStore &amp;&amp; $root.activeCart.canUseSamplePrecriptionSearch()" class="btn-icon btn-add-sample-prescription-active ng-hide" title="Tìm kiếm đơn thuốc mẫu" ng-click="vm.toggleSearchSamplePrescription()">
                                <i class="far fa-poll-h"></i></button>
                            <div class="normal-mode-actions" ng-class="{enable:!vm.isHideMode}">
                                <input ng-disabled="vm.isDisabled" kv-auto-numeric="{isInputNumberHiddenUpDown:true}" id="newItemQuantity" class="form-control form-control-custom text-center ng-pristine ng-untouched ng-valid ng-empty ng-hide" ng-model="vm.productQty" placeholder="Số lượng" ng-hide="vm.isHideMode || vm.hideQuantity" tabindex="1001" kv-enter="vm.onChangeQuantity()" kv-skip-next-focus="true">
                                <a ng-disabled="vm.isDisabled" class="btn-icon-lg sale-mode" ng-class="{enable:!vm.isHideMode}" title="Chế độ nhập" ng-click="vm.changeSaleMode()" ng-hide="vm.hideQuantity"><i class="fal fa-barcode-read"></i></a>
                            </div>
                        </div>
                    </product-search-component>
                </div>
                <div class="search-refund ng-hide" ng-show="$root.session.IsActiveGppDrugStore &amp;&amp; vm.isSearchSamplePrescription">
                    <sample-prescription-search-component on-select-sample-prescription="vm.onSelectSamplePrescription(products)" placeholder="Tìm đơn thuốc mẫu (F7)" toggle-search-sample-prescription="vm.toggleSearchSamplePrescription()" search-input-id="newSamplePrescriptionsSearch">
                        <div class="products-search search-content active">
                            <div kv-autocomplete="vm.autocomplete" class="autocomplete-wrapper ng-pristine ng-untouched ng-valid ng-empty" ng-model="vm.searchTerm" template-id="samplePrescriptionsTempl" attr-inputid="newSamplePrescriptionsSearch" attr-inputclass="form-control-custom" data="vm.samplePrescriptions" on-type="vm.onChangeSearchTerm" on-select="vm.onSelect" on-select-empty="vm.onSamplePrescriptionIsEmpty" on-tindex="vm.tabIndex" pholder="vm.placeholder" attr-iconclass="fal fa-search">
                                <div class="autocomplete " id="">
                                    <i class="fal fa-search"></i>
                                    <input type="text" autocomplete="off" ng-model="vm.searchParam" placeholder="Tìm đơn thuốc mẫu (F7)" class="form-control form-control-custom ng-empty" id="newSamplePrescriptionsSearch" ng-disabled="vm.kvDisable" kv-select-text="" tabindex="1000" kv-tab-index="">
                                    <div class="output-complete is-offline ng-hide" ng-class="{'has-add-new':vm.getStateAddNewProduct(vm.isAddNew, vm.listItems), 'show-only': vm.getStateSelectMulti(vm.listItems,vm.isMultiSelect), 'is-offline': !vm.isOnline}" ng-show="vm.completing">
                                        <ul ng-hide="vm.searchParam &amp;&amp; vm.suggestions.length == 0"><!----></ul>
                                        <div class="not-found ng-hide" ng-show="vm.searchParam &amp;&amp; vm.suggestions.length == 0">Không tìm thấy kết quả nào phù hợp</div>
                                        <a class="add-new-product ng-hide" ng-click="vm.onAddNew()" ng-show="vm.isAddNew &amp;&amp; !vm.getStateSelectMulti(vm.listItems,vm.isMultiSelect)" href="javascript:;">+ Thêm mới hàng hóa</a>
                                        <div class="multi-select-actions ng-hide" ng-show="vm.getStateSelectMulti(vm.listItems, vm.isMultiSelect)">
                                            <span><span class="total-product">false</span> <span translate=""><span>sản phẩm</span></span></span>
                                            <a class="btn btn-primary add-list-product" ng-click="vm.addMultiItemsToCart(vm.listItems)" href="javascript:;">Thêm vào đơn</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="wrap-btn-header">
                                <button class="btn-icon btn-add-sample-prescription-active active" title="Tìm kiếm đơn thuốc mẫu" ng-click="vm.toggleSearchSamplePrescription()">
                                    <i class="far fa-poll-h"></i></button>
                            </div>
                        </div>

                    </sample-prescription-search-component>
                </div>
                <div class="carts-list carts-list-refund" ng-class="{'enable-sort-product' : $root.cartDisplayOptions &amp;&amp; $root.cartDisplayOptions.usingSortProduct}">
                    <div id="cartListProductRefund" ng-class="{'show-duplicate-item' : $root.cartDisplayOptions.duplicateCartItem}" class="show-duplicate-item"><!----></div>
                </div>
                <div class="product-cart hide-add-row" style="display: none;" ng-class="{'hide-order':!($root.cartDisplayOptions.numberOrder), 'hide-code':!($root.cartDisplayOptions.code), 'hide-change-price':!($root.cartDisplayOptions.price), 'hide-price':!($root.cartDisplayOptions.total), 'hide-add-row':!($root.cartDisplayOptions.clone) }">
                    <div class="product-cart-list" ng-init="showEditNote = []"><!----></div>
                </div>

            </cart-refund-products-component>
            <cart-medicines-component><!----></cart-medicines-component>
        </div>
        <div class="cart-footer">
            <div class="cart-footer-left">
                <textarea class="form-control form-control-custom note-cart item-note- ng-empty ng-valid-maxlength ng-touched" type="text" spellcheck="false" ng-model="$root.activeCart.Description" placeholder=" &nbsp;Ghi chú đơn hàng" kv-auto-expand-multi-line="" kv-focus-control-ready="{select: false}" maxlength="4000" tabindex="1500" style="height: 33px;"></textarea>
            </div><!----><!---->
            <div class="form-group-row cart-footer-right" ng-if="$root.saleScreenMode === 2 &amp;&amp; !$root.activeCart.isRefund()">
                <div class="form-group-inline form-group-row form-group-row-sm">
                    <label for="" class="col-form-label">Tổng tiền hàng</label>
                    <div class="col-form-wrap d-flex">
                        <span class="text-bg-default" ng-show="$root.session.Setting.UseTotalQuantity">4</span><!----><!---->
                    </div>
                </div>
                <div class="form-group-inline form-group-row-sm form-group-price">
                    <div class="form-control-plaintext text-right font-size-medium has-currency font-bold">12,036,100<!----></div>
                </div>
            </div><!---->
        </div>
    </div>
    <div class="col-right ">
        <div class="col-right-header ng-hide" ng-show="$root.saleScreenMode === 1 || $root.activeCart.isRefund() || $root.activeCart.isWarrantyCart()">
            <div class="payment-header single-pricebook" ng-class="{'single-pricebook' : vm.priceBookLength < 2}">
                <div class="cart-header-control">
                    <div class="cart-header-control-left">
                        <div class="cart-seller">
                            <sold-by-dropdown-component>
                                <div id="salesman"><span title="" style="" class="k-widget k-dropdown k-header dropdown-control dropdown-control-sm saleman-dropdown" unselectable="on" role="listbox" aria-haspopup="true" aria-expanded="false" tabindex="2000" aria-owns="" aria-disabled="false" aria-busy="false" aria-activedescendant="0cbb1c19-2763-43fb-9ed6-6b20ab75044d"><span unselectable="on" class="k-dropdown-wrap k-state-default"><span unselectable="on" class="k-input"><span>Lê Thanh Quang</span></span><span unselectable="on" class="k-select"><span unselectable="on" class="k-icon k-i-arrow-s">select</span></span></span><select class="dropdown-control dropdown-control-sm saleman-dropdown" kendo-drop-down-list="vm.salesmanDropDown" k-options="vm.salesmanOptions" k-ng-model="$root.activeCart.SoldBy" ng-disabled="!$root.session.Privileges.Invoice_ModifySeller" data-role="dropdownlist" style="display: none;">
                                                        <option value="1000342177">Lê Thanh Quang</option>
                                                        <option value="1000342178">Nguyễn Thị Thái Hòa</option>
                                                        <option value="1000342179">Lê Thị Bảo Trân</option>
                                                    </select></span></div>
                            </sold-by-dropdown-component>
                        </div>
                        <sale-channel-component ng-show="!$root.activeCart.isWarrantyOrder()" sc-id="$root.activeCart.SaleChannelId" disabled="$root.activeCart.isRefund() &amp;&amp; !$root.activeCart.IsQuickReturn">
                            <div id="saleChannel"><span title="" style="" class="k-widget k-dropdown k-header dropdown-control dropdown-control-sm salechannel-dropdown-control" unselectable="on" role="listbox" aria-haspopup="true" aria-expanded="false" tabindex="2001" aria-owns="" aria-disabled="false" aria-busy="false" aria-activedescendant="226239ee-ddc3-4614-9a8e-cc5520dd0e4e"><span unselectable="on" class="k-dropdown-wrap k-state-default"><span unselectable="on" class="k-input"><i title="Kênh bán: Bán trực tiếp" class="fas fa-walking"></i></span><span unselectable="on" class="k-select"><span unselectable="on" class="k-icon k-i-arrow-s">select</span></span></span><select class="dropdown-control dropdown-control-sm salechannel-dropdown-control" kendo-drop-down-list="vm.saleChannelDropDown" k-options="vm.saleChannelOptions" k-ng-model="vm.scId" k-value-primitive="true" ng-disabled="vm.disabled" data-role="dropdownlist" style="display: none;">
                                                    <option value="0" selected="selected">Bán trực tiếp</option>
                                                    <option value="1000000578">Khác</option>
                                                    <option value="-1">+ Thêm kênh bán</option>
                                                </select></span></div>
                        </sale-channel-component>
                        <div class="reception-place ng-hide" ng-show="$root.activeCart.isWarrantyOrder()" id="warranty-reception-place"><span title="" style="" class="k-widget k-dropdown k-header dropdown-control dropdown-control-sm" unselectable="on" role="listbox" aria-haspopup="true" aria-expanded="false" tabindex="2001" aria-owns="warranty-reception-place-dropdown_listbox" aria-disabled="false" aria-busy="false" aria-activedescendant="b39c0708-7ae4-41be-a69d-1868d40edefa"><span unselectable="on" class="k-dropdown-wrap k-state-default"><span unselectable="on" class="k-input"></span><span unselectable="on" class="k-select"><span unselectable="on" class="k-icon k-i-arrow-s">select</span></span></span><select class="dropdown-control dropdown-control-sm" id="warranty-reception-place-dropdown" k-data-source="vm.warrantyReceptionPlaceOptions" k-ng-model="$root.activeCart.WarrantyReceptionPlace" k-on-change="vm.warrantyReceptionPlaceChanged(item)" k-value-primitive="true" k-data-text-field="'Name'" k-data-value-field="'Id'" kendo-drop-down-list="" data-role="dropdownlist" style="display: none;">
                                                <option value="1">Tại cửa hàng</option>
                                                <option value="2">Tại nhà</option>
                                                <option value="3">Khác</option>
                                            </select></span></div>
                    </div>
                    <div class="cart-header-control-right date-time-control">
                        <date-time-selector-component id="poscreenTimeComponent">
                            <span class="k-widget k-datepicker k-header" style=""><span class="k-picker-wrap k-state-disabled"><input kendo-date-picker="" k-ng-model="$root.activeCart.PurchaseDate" k-options="vm.purchaseDateOptions" ng-disabled="($root.session.Setting.NotAllowModifyPurchaseDate &amp;&amp; (($root.activeCart.isInvoice() &amp;&amp; $root.session.Setting.NotAllowModifyInvoiceDate) || ($root.activeCart.isOrder() &amp;&amp; $root.session.Setting.NotAllowModifyOrderDate) || ($root.activeCart.isRefund() &amp;&amp; $root.session.Setting.NotAllowModifyReturnDate))) || $root.activeCart.isUpdated()" placeholder="29/07/2024" id="PurchaseDateCart" tabindex="2002" ng-paste="vm.onPaste($event.originalEvent)" data-role="datepicker" style="width: 100%;" type="text" class="k-input" role="combobox" aria-expanded="false" aria-owns="PurchaseDateCart_dateview" aria-disabled="true" disabled="disabled"><span unselectable="on" class="k-select" role="button" aria-controls="PurchaseDateCart_dateview"><span unselectable="on" class="k-icon k-i-calendar">select</span></span></span></span>
                            <span class="k-widget k-timepicker k-header" style=""><span class="k-picker-wrap k-state-disabled"><input kendo-time-picker="" k-ng-model="$root.activeCart.PurchaseTime" k-options="vm.purchaseTimeOptions" ng-disabled="($root.session.Setting.NotAllowModifyPurchaseDate &amp;&amp; (($root.activeCart.isInvoice() &amp;&amp; $root.session.Setting.NotAllowModifyInvoiceDate) || ($root.activeCart.isOrder() &amp;&amp; $root.session.Setting.NotAllowModifyOrderDate) || ($root.activeCart.isRefund() &amp;&amp; $root.session.Setting.NotAllowModifyReturnDate))) || $root.activeCart.isUpdated()" placeholder="22:19" id="PurchaseTimeCart" tabindex="2003" data-role="timepicker" type="text" class="k-input" role="combobox" aria-expanded="false" aria-owns="PurchaseTimeCart_timeview" aria-disabled="true" style="width: 100%;" disabled="disabled"><span unselectable="on" class="k-select" role="button" aria-controls="PurchaseTimeCart_timeview"><span unselectable="on" class="k-icon k-i-clock">select</span></span></span></span>
                        </date-time-selector-component>
                    </div>
                </div>
                <div class="customer-search"><!----><!----></div>
                <pricebook-component ng-show="vm.priceBookLength >= 2" id="pricebook1" pricebook="$root.activeCart.SelectedPricebook" customer="$root.activeCart.Customer" on-change="vm.onChangePriceBook(pricebook)" read-only="($root.activeCart.isRefundWithInvoice() &amp;&amp; !$root.activeCart.hasExchange() || $root.activeCart.FromOrder &amp;&amp; !$root.activeCart.OrderNotUsePromotion)" uib-tooltip="Bảng giá chung" tooltip-placement="bottom" tooltip-append-to-body="true" class="ng-hide"><span title="" style="" class="k-widget k-dropdown k-header dropdown-control" unselectable="on" role="listbox" aria-haspopup="true" aria-expanded="false" tabindex="2014" aria-owns="pricebook_listbox" aria-disabled="false" aria-busy="false" aria-activedescendant="f6d70d89-2f9d-4d35-a760-40fb258ea88d"><span unselectable="on" class="k-dropdown-wrap k-state-default"><span unselectable="on" class="k-input"><span>Bảng giá
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
        <div class="products product-list product-list--change" ng-show="$root.saleScreenMode === 2 &amp;&amp; !$root.activeCart.isRefund() &amp;&amp; !$root.activeCart.isWarrantyCart()">
            <product-list-component active-cart="vm.activeCart" ng-show="$root.productListLoaded || $root.saleScreenMode === 2" on-select-product="vm.onSelectProduct(selectedProduct)" on-change-price-book="vm.onChangePriceBook(selectedProduct)" on-change-customer="vm.onChangeCustomer(customer)" component="vm.productListComponent">
                <div id="productListWrapper">
                    <div class="product-header" ng-class="{'has-customer-point' : ($root.activeCart.Customer.Debt &amp;&amp; $root.activeCart.Customer.RewardPoint )}">
                        <div class="product-header-wrapper">
                            <div class="product-header-left single-pricebook" ng-class="{'single-pricebook' : vm.priceBookLength < 2}"><!---->
                                <customer-search-component customer="$root.activeCart.Customer" cdisabled="$root.activeCart.CustomerDisabled" on-change="vm.onChangeCustomer({customer: customer})" ng-if="$root.saleScreenMode === 2" ng-show="((!$root.activeCart.isRefund() || $root.activeCart.IsQuickReturn || root.activeCart.IsReturnImport) &amp;&amp; !$root.activeCart.OrderId &amp;&amp; !$root.activeCart.WarrantyOrderId) || $root.activeCart.Customer">
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
                                </customer-search-component><!----><!---->
                                <pricebook-component ng-show="vm.priceBookLength >= 2" id="pricebook1" pricebook="$root.activeCart.SelectedPricebook" customer="$root.activeCart.Customer" on-change="vm.onChangePriceBook({selectedProduct: pricebook})" read-only="($root.activeCart.isRefundWithInvoice() &amp;&amp; !$root.activeCart.hasExchange() || $root.activeCart.FromOrder &amp;&amp; !$root.activeCart.OrderNotUsePromotion)" uib-tooltip="Bảng giá chung" tooltip-placement="bottom" tooltip-append-to-body="true" class="ng-hide"><span title="" style="" class="k-widget k-dropdown k-header dropdown-control" unselectable="on" role="listbox" aria-haspopup="true" aria-expanded="false" tabindex="2014" aria-owns="pricebook_listbox" aria-disabled="false" aria-busy="false" aria-activedescendant="8c44cacb-ee7a-4d9f-865f-b77bb99e36d2"><span unselectable="on" class="k-dropdown-wrap k-state-default"><span unselectable="on" class="k-input"><span>Bảng giá chung</span></span><span unselectable="on" class="k-select"><span unselectable="on" class="k-icon k-i-arrow-s">select</span></span></span><select class="dropdown-control" id="pricebook" k-ng-model="vm.pricebook" ng-disabled="vm.readOnly" kendo-drop-down-list="vm.pricebookDropDown" k-options="vm.pricebookOptions" k-rebind="vm.pricebook" data-role="dropdownlist" style="display: none;">
                                                        <option>Bảng giá chung</option>
                                                    </select></span></pricebook-component>
                            </div>
                            <div class="product-header-right">
                                <button class="btn-icon-lg btn-icon-mix " ng-click="vm.showCateFilter()" tabindex="2020" uib-tooltip="Lọc theo nhóm hàng" tooltip-placement="bottom" tooltip-append-to-body="true">
                                    <i class="fas fa-list-ul"></i></button>
                                <button ng-click="vm.showAttrFilter()" class="btn-icon-lg btn-icon-mix " tabindex="2021" uib-tooltip="Lọc hàng hóa theo thuộc tính" tooltip-placement="bottom" tooltip-append-to-body="true">
                                    <i class="far fa-filter"></i></button>
                                <button ng-click="vm.changeProductView()" uib-tooltip="Chế độ danh sách" tooltip-placement="bottom-right" tooltip-append-to-body="true" class="btn-icon-lg btn-icon-mix gallery--container" tabindex="2022">
                                    <i class="fa fa-image"></i></button>
                            </div>
                        </div>
                        <div class="filter-items">
                            <div class="customer-debt-point" ng-hide="(($root.activeCart.Customer.Debt | formatCurrency) == 0) &amp;&amp; (($root.activeCart.Customer.RewardPoint | formatNumberCurrency) == 0)">
                                <div class="form-group-inline">
                                    <div class="form-group-row ng-hide" ng-show="$root.activeCart.Customer &amp;&amp; $root.activeCart.Customer.Debt &amp;&amp; $root.session.Privileges.CustomerAdjustment_Read">
                                        <span class="tag tag-xxs tag-light-danger"><span translate=""><span>Nợ:</span></span> <!----> <!----> <!----><span ng-if="$root.activeCart.Customer.Debt === undefined || !vm.isOnline">---</span><!----></span>
                                    </div>
                                    <div class="form-group-row ng-hide" ng-show="$root.activeCart.Customer &amp;&amp; $root.activeCart.Customer.RewardPoint &amp;&amp; $root.activeCart.isShowCustomerPoint($root.session.Setting) &amp;&amp; $root.session.Setting.RewardPoint &amp;&amp; $root.session.Privileges.CustomerPointAdjustment_Read">
                                        <span class="tag tag-xxs tag-light-success" uib-tooltip="0" tooltip-placement="right" tooltip-append-to-body="true"><span translate=""><span>Điểm:</span></span> <!----> <!----><span ng-if="$root.activeCart.Customer.RewardPoint === undefined || !vm.isOnline">---</span><!----></span>
                                    </div>
                                </div>
                            </div><!---->
                            <ks-swiper-container slides-per-view="auto" space-between="10" pagination-is-activse="true" pagination-clickable="false" override-parameters="{'shortSwipes':false}" show-nav-buttons="false" loop="false" initial-slide="0" auto-resize="true" class="filter-list" on-ready="vm.onReadySwiper(swiper)">
                                <div class="swiper-container swiper-container-horizontal">
                                    <div class="parallax-bg ng-hide" data-swiper-parallax="" ng-show="parallax"></div>
                                    <div class="swiper-wrapper " ng-transclude="">
                                        <div kv-product-filter-info="" class="filter-info" filter-data="vm.categoryFilter" on-select="vm.cateFilterComponent.selectCategory(cateId)" on-deselect="vm.cateFilterComponent.deselectCategory(cateId)"></div>
                                    </div>
                                    <div class="swiper-pagination " id="paginator-1507626d-29d7-4cb7-b265-09bb5ace0595"></div>
                                    <div class="swiper-button-next ng-hide" ng-show="showNavButtons" id="nextButton-1507626d-29d7-4cb7-b265-09bb5ace0595"></div>
                                    <div class="swiper-button-prev ng-hide" ng-show="showNavButtons" id="prevButton-1507626d-29d7-4cb7-b265-09bb5ace0595"></div>
                                    <div class="swiper-scrollbar ng-hide" ng-show="showScrollBar" id="scrollBar-1507626d-29d7-4cb7-b265-09bb5ace0595"></div>
                                </div>
                            </ks-swiper-container>
                        </div>
                    </div>
                    <ks-swiper-container swiper="vm.swiper" slides-per-view="1" space-between="0" pagination-is-activse="true" pagination-clickable="false" override-parameters="{'shortSwipes':false}" show-nav-buttons="false" loop="false" initial-slide="0" auto-resize="true" class="swiperList" on-ready="vm.onReadySwiper(swiper)">
                        <div class="swiper-container swiper-container-horizontal">
                            <div class="parallax-bg ng-hide" data-swiper-parallax="" ng-show="parallax"></div>
                            <div class="swiper-wrapper " ng-transclude=""><!---->
                                <div class="swiper-slide swiper-slide-active" ng-transclude="" ng-repeat="slide in vm.slides" style="width: 585px;">
                                    <ul><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Áo vest nam màu xanh lá - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/1.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/1.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">3,899,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/1.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/1.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">3,899,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Áo vest nam màu xanh lá</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">3,899,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Áo vest nam màu kem - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/2.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/2.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">3,699,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/2.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/2.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">3,699,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Áo vest nam màu kem</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">3,699,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Áo vest nam màu xanh - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/3.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/3.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">3,699,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/3.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/3.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">3,699,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Áo vest nam màu xanh</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">3,699,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Áo vest nam màu xanh trắng - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/4.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/4.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">1,299,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/4.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/4.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">1,299,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Áo vest nam màu xanh trắng</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">1,299,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Áo sơ mi nam màu đỏ caro - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/5.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/5.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">959,200</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/5.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/5.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">959,200</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Áo sơ mi nam màu đỏ caro</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">959,200</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Áo sơ mi nam màu xanh - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/6.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/6.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">749,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/6.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/6.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">749,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Áo sơ mi nam màu xanh</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">749,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Áo sơ mi nam sọc trắng - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/7.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/7.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">719,200</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/7.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/7.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">719,200</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Áo sơ mi nam sọc trắng</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">719,200</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Áo sơ mi nam màu đỏ sọc - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/8.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/8.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">699,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/8.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/8.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">699,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Áo sơ mi nam màu đỏ sọc</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">699,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Cà vạt nam đồng giá 95k - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/9.jpg" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/9.jpg"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">95,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/9.jpg" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/9.jpg"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">95,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Cà vạt nam đồng giá 95k</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">95,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Cà vạt nam Hàn Quốc - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/10.jpg" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/10.jpg"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">200,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/10.jpg" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/10.jpg"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">200,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Cà vạt nam Hàn Quốc</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">200,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Cà vạt nam màu xanh sọc - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/11.JPG" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/11.JPG"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">599,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/11.JPG" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/11.JPG"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">599,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Cà vạt nam màu xanh sọc</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">599,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Cà vạt nam màu hồng sọc - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/12.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/12.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">599,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/12.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/12.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">599,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Cà vạt nam màu hồng sọc</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">599,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Thắt lưng nam Hermes - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/13.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/13.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">299,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/13.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/13.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">299,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Thắt lưng nam Hermes</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">299,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Thắt lưng nam cao cấp - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/14.jpg" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/14.jpg"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">299,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/14.jpg" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/14.jpg"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">299,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Thắt lưng nam cao cấp</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">299,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Thắt lưng nam LV caro xanh - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/15.jpg" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/15.jpg"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">899,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/15.jpg" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/15.jpg"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">899,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Thắt lưng nam LV caro xanh</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">899,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                    </ul>
                                </div><!---->
                                <div class="swiper-slide swiper-slide-next" ng-transclude="" ng-repeat="slide in vm.slides" style="width: 585px;">
                                    <ul><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Thắt Lưng Khóa Tự Động - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/16.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/16.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">380,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/16.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/16.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">380,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Thắt Lưng Khóa Tự Động</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">380,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Quần tây nam màu đen - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/17.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/17.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">909,300</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/17.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/17.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">909,300</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Quần tây nam màu đen</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">909,300</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Quần kaki nam màu nâu - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/18.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/18.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">599,500</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/18.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/18.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">599,500</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Quần kaki nam màu nâu</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">599,500</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Quần kaki nam màu xanh - Tồn: 92 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/19.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/19.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">1,299,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">92</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/19.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/19.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">1,299,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">92</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Quần kaki nam màu xanh</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">1,299,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">92</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Quần kaki nam màu kem - Tồn: 92 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/20.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/20.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">1,299,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">92</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/20.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/20.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">1,299,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">92</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Quần kaki nam màu kem</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">1,299,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">92</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Giày da Sanvado màu đen - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/21.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/21.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">539,100</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/21.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/21.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">539,100</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Giày da Sanvado màu đen</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">539,100</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Giầy da nam màu nâu - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/22.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/22.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">629,100</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/22.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/22.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">629,100</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Giầy da nam màu nâu</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">629,100</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Giày nam buộc dây màu nâu - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/23.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/23.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">629,100</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/23.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/23.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">629,100</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Giày nam buộc dây màu nâu</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">629,100</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Giày tây lười nam màu đen - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/24.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/24.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">629,150</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/24.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/24.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">629,150</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Giày tây lười nam màu đen</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">629,150</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Áo vest nữ màu hồng chìm - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/25.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/25.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">2,499,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/25.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/25.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">2,499,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Áo vest nữ màu hồng chìm</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">2,499,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Áo vest nữ màu xám - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/26.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/26.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">1,599,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/26.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/26.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">1,599,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Áo vest nữ màu xám</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">1,599,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Áo vest nữ màu hồng - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/27.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/27.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">1,249,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/27.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/27.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">1,249,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Áo vest nữ màu hồng</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">1,249,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Áo vest nữ màu xanh dương - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/28.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/28.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">2,169,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/28.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/28.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">2,169,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Áo vest nữ màu xanh dương</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">2,169,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Ví VIENNE màu Tím - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/29.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/29.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">190,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/29.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/29.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">190,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Ví VIENNE màu Tím</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">190,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Ví màu xanh nhạt - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/30.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/30.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">1,899,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/30.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/30.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">1,899,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Ví màu xanh nhạt</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">1,899,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                    </ul>
                                </div><!---->
                                <div class="swiper-slide" ng-transclude="" ng-repeat="slide in vm.slides" style="width: 585px;">
                                    <ul><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Ví màu xanh lá cây - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/31.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/31.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">1,849,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/31.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/31.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">1,849,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Ví màu xanh lá cây</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">1,849,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Túi xách nữ màu xanh dương - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/32.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/32.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">1,899,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/32.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/32.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">1,899,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Túi xách nữ màu xanh dương</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">1,899,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Giày nữ màu đen hở mũi - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/33.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/33.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">1,980,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/33.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/33.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">1,980,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Giày nữ màu đen hở mũi</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">1,980,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Giày nữ màu trắng - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/34.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/34.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">1,750,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/34.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/34.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">1,750,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Giày nữ màu trắng</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">1,750,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Giày nữ màu xanh bóng - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/35.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/35.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">1,995,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/35.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/35.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">1,995,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Giày nữ màu xanh bóng</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">1,995,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Giày nữ màu kem - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/36.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/36.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">1,788,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/36.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/36.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">1,788,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Giày nữ màu kem</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">1,788,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Thắt lưng nữ ZAA màu nâu - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/37.jpg" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/37.jpg"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">242,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/37.jpg" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/37.jpg"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">242,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Thắt lưng nữ ZAA màu nâu</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">242,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Thắt lưng nữ DKNY màu xanh - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/38.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/38.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">3,520,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/38.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/38.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">3,520,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Thắt lưng nữ DKNY màu xanh</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">3,520,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Thắt lưng nữ HEX xanh lá - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/39.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/39.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">200,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/39.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/39.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">200,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Thắt lưng nữ HEX xanh lá</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">200,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                        <li ng-repeat="p in slide.items track by p.Id" class="" ng-click="vm.selectProduct(p)">
                                            <a href="javascript:void(0)" class="product" title="Thắt lưng nữ màu vàng - Tồn: 0 - KH đặt: 0" tabindex="-1">
                                                <div class="product-info ">
                                                    <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/40.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/40.png"> <!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">4,300,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                    <div class="product-info-multiple has-image" ng-class="{'has-image': p.Image}">
                                                        <img loading="lazy" ng-src="https://cdn-app.kiotviet.vn/sample/fashion/40.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/40.png"> <!---->
                                                        <div class="product-detail">
                                                            <span class="product-price has-currency">4,300,000</span>
                                                            <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-info-bottom"><!---->
                                                    <h4 class="product-name" ng-if="$root.cartDisplayOptions.groupProducts">Thắt lưng nữ màu vàng</h4><!----><!---->
                                                    <div class="product-detail">
                                                        <span class="product-price has-currency">4,300,000</span>
                                                        <span class="product-qty ng-hide" ng-show="vm.isReadOnHand &amp;&amp; $root.cartDisplayOptions.onHand &amp;&amp; p.ProductType==2">0</span>
                                                    </div>
                                                </div>
                                            </a></li><!---->
                                    </ul>
                                </div><!---->
                            </div>
                            <div class="swiper-pagination " id="paginator-173f3fe0-1844-4a02-83bc-3a3e5795e5f2"></div>
                            <div class="swiper-button-next ng-hide" ng-show="showNavButtons" id="nextButton-173f3fe0-1844-4a02-83bc-3a3e5795e5f2"></div>
                            <div class="swiper-button-prev ng-hide" ng-show="showNavButtons" id="prevButton-173f3fe0-1844-4a02-83bc-3a3e5795e5f2"></div>
                            <div class="swiper-scrollbar ng-hide" ng-show="showScrollBar" id="scrollBar-173f3fe0-1844-4a02-83bc-3a3e5795e5f2"></div>
                        </div>
                    </ks-swiper-container>
                    <div class="product-footer">
                        <div class="product-footer-left">
                            <div class="product-footer-left-pagination products-list-pagination">
                                <button ng-click="vm.swipePrev()" title="Trang trước" class="btn-icon btn-icon-bg-default" tabindex="2460">
                                    <i class="far fa-angle-left"></i></button>
                                <span class="number-pages">1/3</span>
                                <button ng-click="vm.swipeNext()" title="Trang sau" class="btn-icon btn-icon-bg-default" tabindex="2461">
                                    <i class="far fa-angle-right"></i></button>
                            </div>
                        </div><!----><!---->
                        <div ng-if="$root.activeCart.isInvoice()" class="cart-actions cart-actions-list-product"><!---->
                            <button skip-disable="" type="button" class="btn btn-primary btn-xl" ng-click="vm.debouncedSaveTransaction()" id="saveTransactionNormal" tabindex="2465">Thanh toán</button>
                        </div><!---->
                    </div>
                    <product-filter-cate-component active="vm.toggles.showCateFilter" on-filter="vm.filterByCate($checkedTree)" component="vm.cateFilterComponent">
                        <kv-pull-over kv-show="vm.active" on-active="vm.onActive()" skip-disable="">
                            <div class="float-nav ng-hide" ng-show="popOut">
                                <div class="float-nav-content" ng-transclude="">
                                    <h3 class="float-nav-title filter">Lọc theo nhóm hàng
                                        <button tabindex="-1" ng-click="vm.close()" class="btn-icon btn-icon-default">
                                            <i class="fal fa-times"></i></button>
                                    </h3>
                                    <div class="filter-header">
                                        <h4 class="filter-header-title" translate=""><span>Nhóm hàng</span>
                                        </h4><!---->
                                    </div>
                                    <div class="scroll-content"><!---->
                                        <div class="loading" ng-if="!vm.treeDataSource">Đang tải nhóm hàng ...</div><!---->
                                        <div id="treeView" kendo-tree-view="vm.treeView" class="kv-treeview k-widget k-treeview" k-options="vm.treeOptions" ng-class="{'hide-k-icon': vm.searchParam}" data-role="treeview" tabindex="-1">
                                            <ul class="k-group k-treeview-lines" role="tree"></ul>
                                        </div>
                                        <div class="not-found ng-hide" style="color: #a5a6ae;" ng-show="!vm.filterAndResult">
                                            <i class="far fa-file-search" style="font-size: 32px;"></i> Không có kết quả nào được tìm thấy
                                        </div>
                                    </div>
                                    <div class="group-buttons">
                                        <div class="group-buttons-left">
                                            <a ng-click="vm.clearFilter()" class="btn-remove-filter font-medium"><i class="far fa-trash-alt"></i> Xóa chọn tất cả</a>
                                        </div>
                                        <div class="group-buttons-right">
                                            <a ng-click="vm.close()" class="btn btn-outline-primary"><i class="fa fa-ban"></i>Bỏ qua</a>
                                            <a ng-click="vm.applyFilter()" class="btn btn-primary"><i class="fa fa-check-square"></i>
                                                <span translate=""><span>Xong</span></span></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="float-overlay  ng-hide" ng-show="popOut" ng-click="popOut=!popOut"></div>
                        </kv-pull-over>
                    </product-filter-cate-component>
                    <product-filter-attr-component active="vm.toggles.showAttrFilter" on-filter="vm.filterByAttrs($attrFilters)">
                        <kv-pull-over kv-show="vm.active" on-active="vm.onActive()">
                            <div class="float-nav ng-hide" ng-show="popOut">
                                <div class="float-nav-content" ng-transclude="">
                                    <h3 class="float-nav-title">Lọc hàng hóa theo thuộc tính
                                        <button tabindex="-1" ng-click="vm.close()" class="btn-icon btn-icon-default">
                                            <i class="fal fa-times"></i></button>
                                    </h3>
                                    <div class="scroll-content"><!---->
                                        <div class="loading" ng-if="!vm.attributeList">Đang tải thuộc tính ...</div><!----><!---->
                                    </div>
                                    <div class="group-buttons">
                                        <div class="group-buttons-left">
                                            <a ng-click="vm.clearFilter(true)" class="btn-remove-filter"><i class="far fa-trash-alt"></i>
                                                <span translate="" class="font-medium"><span>Xóa chọn tất cả</span></span></a>
                                        </div>
                                        <div class="group-buttons-right">
                                            <a ng-click="vm.close()" class="btn btn-outline-primary"><i class="fa fa-ban"></i>Bỏ qua</a>
                                            <a href="javascript:;" class="btn btn-primary" ng-click="vm.processFilter(true)" tabindex="-1"><i class="fa fa-check-square"></i>
                                                <span translate=""><span>Xong</span></span></a></div>
                                    </div>
                                    <div class="catgTreeBox"></div>
                                </div>
                            </div>
                            <div class="float-overlay  ng-hide" ng-show="popOut" ng-click="popOut=!popOut"></div>
                        </kv-pull-over>
                    </product-filter-attr-component>
                </div>
            </product-list-component>
        </div><!----><span ng-repeat-start="cart in $root.carts track by cart.Uuid"></span><!----><span ng-repeat-end=""></span><!----><!----><!----><!---->
    </div><!---->
</div>
@endsection