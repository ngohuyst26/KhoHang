<div class="page-header" kv-focus-click="#productSearchInput">
    <div class="header-left">
        <div class="col-left-control ">
            <product-search-component on-select-product="vm.onSelectProduct(selectedProduct, weight)" on-select-grouped-products="vm.onSelectProductNoLock(selectedProduct, weight)" on-select-sample-prescription="vm.onSelectSamplePrescription(products)" is-disabled="$root.activeCart.isWarrantyInvoice()" quantityid="productSearchInputF3" placeholder="Tìm hàng hóa (F3)" toggle-search-sample-prescription="vm.toggleSearchSamplePrescription()">
                <div class="products-search">
                    <div class="autocomplete-wrapper ng-pristine ng-untouched ng-valid ng-empty">
                        <div class="autocomplete " id="">
                            <i class="fal fa-search"></i>
                            <input type="text" autocomplete="off" placeholder="Tìm hàng hóa (F3)" class="form-control form-control-custom ng-empty ng-touched" id="productSearchInput" ng-disabled="vm.kvDisable" kv-select-text="" tabindex="1" kv-tab-index="">
                            <div class="output-complete" id="toggleProduct" style="display: none;">
                                <ul id="productSearchList">
                                    @php
                                        $products = \App\Models\Product::with(['productSku','productSku.optionValue.option'])->paginate(5);
                                    @endphp
                                    @foreach($products as $product)

                                        <li class="output-item is-on-cart addProduct" data-id="{{$product->id}}" data-name="{{$product->name}}" data-price="{{$product->productSku->first()->sale_price}}" index="0" val="Áo vest nam màu xanh lá">
                                            <div class="output-thumb-wrap">
                                                <div class="output-thumb">
                                                    <button class="output-product-lk">
                                                        <i class="far fa-ellipsis-h"></i>
                                                    </button> <!----><img loading="lazy" ng-if="!(suggestion.Image == null || suggestion.Image == '') " ng-src="https://cdn-app.kiotviet.vn/sample/fashion/1.png" onerror="loadFallBackImage(this)" kv-fallback-img="" src="https://cdn-app.kiotviet.vn/sample/fashion/1.png"><!----> <!---->
                                                </div>
                                                <div class="output-thumb-secondary">
                                                    <i class="fas fa-image img-default"></i>
                                                </div>
                                            </div> <!---->
                                            <div class="output-body" ng-if="suggestion.Id">
                                                <div class="output-info"><h5 class="output-name font-medium">
                                                        <span class="">{{$product->name}}</span>
                                                        <span class="tag tag-xxs tag-light-warning"></span>
                                                        <span class="tag tag-xxs tag-light-primary"></span></h5> <!---->
                                                    <div ng-if="!vm.isLimitViewPriceWarrantyOrder" class="output-price">
                                                        <span class="product-price-new has-currency">{{number_format($product->productSku->first()->sale_price, 0, ',', '.') }} đ</span>
                                                    </div><!---->
                                                </div>
                                                <div class="output-value">
                                                    <span class="output-code">SP000{{$product->id}}</span>
                                                </div> <!---->
                                                <div class="output-unit" ng-if="$root.session.User.IsAdmin || $root.session.Privileges.Invoice_ReadOnHand">
                                                    <span class="output-tag"> <span translate=""><span>Tồn</span></span>: <span class="onHandValue">0</span> </span>
                                                    <span class="output-tag ng-hide" ng-show="vm.isUseOrderSupplier"> <span translate=""><span>Đặt NCC</span></span>: <span class="priceValue">0</span> </span>
                                                    <span class="output-tag"> <span translate=""><span>KH đặt</span></span>: <span class="reservedValue"> 0 </span> </span>
                                                </div><!---->
                                            </div><!----> <!---->
                                        </li>
                                    @endforeach
                                </ul>
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
                    <button ng-disabled="vm.isDisabled" id="scanner_productSearchInput" class="btn-icon btn-scales ng-hide" title="Chế độ sử dụng cân điện tử" ng-class="{enable:vm.search_method == 'search-3'}" ng-click="vm.toggleUseElectronicScales()" ng-show="vm.settings.UseElectronicScales &amp;&amp; !$root.activeCart.isWarrantyOrder()" tabindex="-1">
                        <i class="mask mask-scales"></i></button>
                    <button ng-show="$root.cartDisplayOptions.multiSelectProduct" class="btn-icon btn-toggle-select-multi ng-hide" ng-class="{'enable' : vm.multiSelectProduct}" title="Chế độ chọn nhiều hàng hóa" ng-click="vm.toggleMultiSelect()">
                        <i class="fas fa-tasks"></i></button>
                    <button ng-show="$root.session.IsActiveGppDrugStore &amp;&amp; $root.activeCart.canUseSamplePrecriptionSearch()" class="btn-icon btn-add-sample-prescription-active ng-hide" title="Tìm kiếm đơn thuốc mẫu" ng-click="vm.toggleSearchSamplePrescription()">
                        <i class="far fa-poll-h"></i></button>
                    <div class="normal-mode-actions" ng-class="{enable:!vm.isHideMode}">
                        <input ng-disabled="vm.isDisabled" kv-auto-numeric="{isInputNumberHiddenUpDown:true}" id="productQtyInput" class="form-control form-control-custom text-center ng-pristine ng-untouched ng-valid ng-empty ng-hide" ng-model="vm.productQty" placeholder="Số lượng" ng-hide="vm.isHideMode || vm.hideQuantity" tabindex="2" kv-enter="vm.onChangeQuantity()" kv-skip-next-focus="true">
                        <a ng-disabled="vm.isDisabled" class="btn-icon-lg sale-mode" ng-class="{enable:!vm.isHideMode}" title="Chế độ nhập" ng-click="vm.changeSaleMode()" ng-hide="vm.hideQuantity"><i class="fal fa-barcode-read"></i></a>
                    </div>
                </div>

            </product-search-component>
        </div>
        <div class="col-left-control ng-hide" ng-show="$root.session.IsActiveGppDrugStore &amp;&amp; $root.activeCart.canUseSamplePrecriptionSearch() &amp;&amp; vm.isSearchSamplePrescription">
            <sample-prescription-search-component on-select-sample-prescription="vm.onSelectSamplePrescription(products)" placeholder="Tìm đơn thuốc mẫu" toggle-search-sample-prescription="vm.toggleSearchSamplePrescription()">
                <div class="products-search search-content active">
                    <div kv-autocomplete="vm.autocomplete" class="autocomplete-wrapper ng-pristine ng-untouched ng-valid ng-empty" ng-model="vm.searchTerm" template-id="samplePrescriptionsTempl" attr-inputid="samplePrescriptionSearchInput" attr-inputclass="form-control-custom" data="vm.samplePrescriptions" on-type="vm.onChangeSearchTerm" on-select="vm.onSelect" on-select-empty="vm.onSamplePrescriptionIsEmpty" on-tindex="vm.tabIndex" pholder="vm.placeholder" attr-iconclass="fal fa-search">
                        <div class="autocomplete " id="">
                            <i class="fal fa-search"></i>
                            <input type="text" autocomplete="off" ng-model="vm.searchParam" placeholder="Tìm đơn thuốc mẫu" class="form-control form-control-custom ng-empty" id="samplePrescriptionSearchInput" ng-disabled="vm.kvDisable" kv-select-text="" tabindex="1" kv-tab-index="">
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
        <div class="cart-tabs">
            <cart-tabs-component class="list-tabs" active-cart="$root.activeCart" kv-focus="vm.focusSearchInput()" kv-select-tab="vm.onSelectCart($cart, $prevCart)">
                <kv-scroll-tabs on-add="vm.addTab(orderType, false, true)" ng-model="$root.activeCart.Uuid" class="ng-pristine ng-untouched ng-valid ng-empty">
                    <div class="header-tab-wrap">
                        <ul class="move-tab-wrap d-flex">
                            <li class="icon-item move-tab ng-hide" ng-show="overflow">
                                <a class="nav-link move-tab-link" skip-disable="" ng-click="moveLeft()">
                                    <i skip-disable="" class="fal fa-chevron-left"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="content-tab" ng-class="{'o-hidden': overflow}" style="width: 783px;">
                            <div class="scroll-lane list-tabs" style="width: 261px;">
                                <ul class="nav nav-tabs icon-list">
                                    <div ng-transclude="" class="d-flex"><!----><!---->
                                        <kv-scroll-tab-pane ng-repeat="cart in vm.carts track by cart.Uuid" kv-tab-id="cart.Uuid" kv-tab-type="cart.Type" kv-cart="cart" on-select="vm.selectTab(cart)" on-close="vm.closeTabByConfirm(cart)" on-change-type="vm.changeCartType(cart)" show-change-type="vm.showChangeType(cart)" ng-if="vm.isDisplayed(cart)" ng-class="{'has-delivery-info' : cart.DeliveryDetail.PartnerCode }">
                                            <li class="nav-item active" skip-disable="" ng-class="{active:selected}">
                                                <!---->
                                                <button type="button" tabindex="-1" uib-tooltip="Chuyển sang đặt hàng" tooltip-placement="bottom" tooltip-append-to-body="true" ng-if="tabType === 1" class="btn-icon btn-icon-primary btn-change-type" ng-show="showChangeType()" ng-click="changeType()">
                                                    <i class="far fa-exchange"></i></button><!---->
                                                <!---->
                                                <a href="javascript:void(0);" tabindex="-1" ng-class="{active:selected}" class="nav-link active" skip-disable="" ng-transclude="" ng-click="select()"><span skip-disable="">Hóa đơn</span></a>
                                                <button type="button" tabindex="-1" skip-disable="" ng-click="close()" class="btn-icon-sm btn-close-tab" title="Đóng">
                                                    <i class="fal fa-times"></i></button>
                                            </li>
                                        </kv-scroll-tab-pane><!----><!----></div>
                                    <li class="icon-item dropdown" ng-hide="overflow" uib-dropdown="">
                                        <a class="btn-icon-lg btn-add-tabs" href="" skip-disable="" ng-click="vm.newPane()" tabindex="-1" title="Thêm mới"><i class="fal fa-plus-circle"></i></a>
                                        <a class="icon-link btn-dropdown add-more dropdown-toggle" uib-dropdown-toggle="" aria-haspopup="true" aria-expanded="false"><i class="fas fa-caret-down"></i></a>
                                        <ul class="dropdown-menu" uib-dropdown-menu="" role="menu">
                                            <!----><a class="dropdown-item " role="menuitem" ng-click="vm.newOrderPane()" ng-if="vm.showOrderOption()">Thêm mới đặt hàng</a><!---->
                                            <!---->
                                        </ul>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <ul class="d-flex move-tab-wrap">
                            <li class="icon-item move-tab ng-hide" ng-show="overflow">
                                <a class="nav-link move-tab-link move-tab-right" skip-disable="" ng-click="moveRight()">
                                    <i skip-disable="" class="fal fa-chevron-right"></i>
                                </a>
                            </li>
                            <li class="icon-item dropdown ng-hide" ng-show="overflow" uib-dropdown="">
                                <a class="btn-icon-lg btn-add-tabs" href="" skip-disable="" ng-click="vm.newPane()" title="Thêm mới"><i class="fal fa-plus-circle"></i></a>
                                <span kv-alert=""></span>
                                <a class="icon-link btn-dropdown dropdown-toggle" uib-dropdown-toggle="" aria-haspopup="true" aria-expanded="false"><i class="fas fa-caret-down"></i></a>
                                <ul class="dropdown-menu" uib-dropdown-menu="" role="menu">
                                    <!----><a class="dropdown-item" role="menuitem" ng-click="vm.newOrderPane()" ng-if="vm.showOrderOption()">Thêm mới đặt hàng</a><!---->
                                    <!---->
                                </ul>
                            </li>
                        </ul>
                    </div>
                </kv-scroll-tabs>
            </cart-tabs-component>
        </div>
    </div>
    <menu-component class="header-right">
        <ul class="icon-list header-nav">
            <li class="icon-item"><!----></li>
            <li class="icon-item" ng-show="vm.isOrderEnabled()">
                <a class="icon-link" ng-click="toggles.showMenu=false;vm.showOrderList()" uib-tooltip="Xử lý đặt hàng" tooltip-placement="bottom" tooltip-append-to-body="true" skip-disable=""><i class="fas fa-shopping-bag"></i></a>
            </li>
            <li class="icon-item" ng-show="$root.session.Privileges.Return_Create">
                <a class="icon-link" uib-tooltip="Trả hàng" tooltip-placement="bottom" tooltip-append-to-body="true" skip-disable="" ng-click="toggles.showMenu=false;vm.makeRefund()"><i class="fas fa-reply"></i></a>
            </li>
            <li class="icon-item sync-data">
                <a class="icon-link" skip-disable="" uib-tooltip="Đồng bộ dữ liệu" tooltip-placement="bottom" tooltip-append-to-body="true" ng-click="vm.showPendingSync()"><span class="badge badge-sm badge-danger ng-hide" ng-show="vm.pendingSyncCount > 0">0</span>
                    <i class="fas fa-repeat"></i></a></li>
            <li class="icon-item">
                <a class="icon-link print-button enable" ng-class="{enable:$root.AutoPrint}" uib-tooltip="Thiết lập in" tooltip-placement="bottom" tooltip-append-to-body="true" id="printConfig" skip-disable="" uib-popover-template="'autoPrintTpl.html'" popover-trigger="'outsideClick'" popover-placement="bottom" popover-class="popover-print popover-284"><span class="badge badge-sm badge-print ng-hide" ng-show="vm.alphabelticalList.length > 0"> <span ng-show="$root.session.Setting.UseCod &amp;&amp; ($root.activeCart.isInvoice() || $root.activeCart.isOrder() || $root.activeCart.hasExchange())"> </span></span>
                    <i class="fas fa-print"></i></a></li>
            <li class="icon-item"><span class="user-name">{{Auth::user()->name ?? ''}}</span></li>
            <li class="icon-item menu-bar" id="sale-menu-bar">
                <a class="icon-link list-bar" skip-disable=""><i class="far fa-bars"></i></a>
                <div class="dropdown-menu dropdown-menu-right main-settings">
                    <a class="dropdown-item" ng-click="vm.viewDailyReport()" skip-disable="" ng-show="$root.session.Privileges.EndOfDayReport_EndOfDayDocument || $root.session.Privileges.EndOfDayReport_EndOfDaySynthetic"><span class="dropdown-icon"><i class="far fa-chart-pie"></i></span>
                        <span translate=""><span>Xem báo cáo cuối
                                            ngày</span></span></a>
                    <a class="dropdown-item" ng-click="toggles.showMenu=false;vm.showOrderList()" skip-disable="" ng-show="vm.isOrderEnabled()"><span class="dropdown-icon"><i class="far fa-shopping-bag"></i></span>
                        <span translate=""><span>Xử lý đặt hàng</span></span></a>
                    <a class="dropdown-item" ng-click="toggles.showMenu=false;vm.makeRefund()" skip-disable="" ng-show="$root.session.Privileges.Return_Create"><span class="dropdown-icon"><i class="far fa-reply-all"></i></span>
                        <span translate=""><span>Chọn hóa đơn trả hàng</span></span></a>
                    <a class="dropdown-item ng-hide" ng-click="toggles.showMenu=false;vm.openWarrantyOrderList()" skip-disable="" ng-show="$root.session.Setting.Warranty &amp;&amp; $root.session.Privileges &amp;&amp; $root.session.Privileges.WarrantyOrder_Update"><span class="dropdown-icon"><i class="far fa-file-export"></i></span>
                        <span translate=""><span>Xử lý yêu cầu sửa chữa</span></span></a>
                    <a class="dropdown-item" ng-click="toggles.showMenu=false;vm.makeReceipt()" skip-disable="" ng-show="$root.session.Privileges.Payment_Create"><span class="dropdown-icon"><i class="far fa-file-edit"></i></span>
                        <span translate=""><span>Lập phiếu thu</span></span></a>
                    <a class="dropdown-item ng-hide" ng-click="toggles.showMenu=false;vm.releaseVoucher()" skip-disable="" ng-show="vm.networkService.state === 'online' &amp;&amp; $root.session.Setting.UseVoucher &amp;&amp; ($root.session.Privileges.VoucherCampaign_Release || $root.session.Privileges.VoucherCampaign_Update)"><span class="dropdown-icon"><i class="far fa-receipt"></i></span>
                        <span translate=""><span>Phát hành voucher</span></span></a>
                    <a class="dropdown-item" ng-click="toggles.showMenu=false;vm.showImport()" skip-disable="" ng-show="$root.session.Privileges.Invoice_Create || $root.session.Privileges.Order_Create || $root.session.Privileges.Return_Create"><span class="dropdown-icon"><i class="far fa-file-import"></i></span>
                        <span translate=""><span>Import file</span></span></a>
                    <a class="dropdown-item ng-hide" title="Thiết lập tỷ giá hối đoái" ng-click="toggles.showMenu=false;vm.showSettingExchangeRatesMultiCurrency()" skip-disable="" ng-show="vm.displayMultiCurrenciesExchangeRateSettings &amp;&amp; $root.session.Privileges.PosParameter_MultiCurrencyUpdateExchangeRate"><span class="dropdown-icon"><i class="far fa-file-edit"></i></span>
                        <span translate=""><span>Thiết
                                            lập tỷ giá hối đoái</span></span></a>
                    <a class="dropdown-item" ng-click="toggles.showMenu=false;vm.configDisplay()" skip-disable="" ng-show="$root.session.Privileges.Invoice_Create || $root.session.Privileges.Order_Create || $root.session.Privileges.Return_Create"><span class="dropdown-icon"><i class="far fa-eye"></i></span>
                        <span translate=""><span>Tùy
                                            chọn hiển thị</span></span></a>
                    <a class="dropdown-item" title="Danh sách các phím tắt" ng-click="toggles.showMenu=false;vm.configHotkeys()"><span class="dropdown-icon"><i class="far fa-info-circle"></i></span>
                        <span translate=""><span>Phím tắt</span></span></a>
                    <a class="dropdown-item" href="{{route('dashboard')}}" skip-disable=""><span class="dropdown-icon"><i class="far fa-poll"></i></span>
                        <span translate=""><span>Quản lý</span></span></a>
                    <a class="dropdown-item" href="{{route('logout')}}"  skip-disable=""><span class="dropdown-icon"><i class="far fa-sign-out"></i></span>
                        <span translate=""><span>Đăng xuất</span></span></a></div>
            </li>
        </ul>
    </menu-component>
</div>