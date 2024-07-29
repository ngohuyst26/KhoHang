<footer-component class="page-footer">
    <div tabindex="-1" class="kv-tab tabs-pos" ng-show="$root.activeCart.isInvoice() || $root.activeCart.isOrder()">
        <ul class="nav nav-tabs">
            <li class="nav-item" ng-class="{ 'active': $root.saleScreenMode === 1 }">
                <a id="PaymentTabId" class="nav-link" ng-click="vm.toogleSaleMode(1)"><span><i class="far fa-bolt"></i> <span class="tabs-name" translate=""><span>Bán nhanh</span></span></span></a>
            </li>
            <li class="nav-item active" ng-class="{ 'active': $root.saleScreenMode === 2 }">
                <a class="nav-link" ng-click="vm.toogleSaleMode(2)"><span><i class="far fa-clock"></i> <span class="tabs-name" translate=""><span>Bán thường</span></span></span></a>
            </li><!---->
            <li class="nav-item" ng-class="{ 'active': $root.saleScreenMode === 3 }" ng-if="($root.activeCart.isInvoice() || $root.activeCart.isOrder() || $root.activeCart.hasExchange() ) &amp;&amp; $root.session.Setting.UseCod">
                <a class="nav-link" ng-click="vm.toogleSaleMode(3)"><span><i class="far fa-truck"></i> <span class="tabs-name" translate=""><span>Bán giao
                                            hàng</span></span></span></a></li><!---->
        </ul>
    </div><!---->
    <div class="page-footer-right">
        <div class="kv-sync">
            <span ng-show="$root.inSyncProgress" class="ng-hide"><i uib-tooltip="Đang tải dữ liệu" tooltip-placement="top" tooltip-append-to-body="true" class="far fa-sync"></i></span>
        </div>
        <div class="page-footer-items page-footer-branchs ng-hide" ng-show="vm.activeBranches &amp;&amp; vm.activeBranches.length > 1 &amp;&amp; vm.isOnline">
            <i class="fas fa-map-marker-alt"></i><span title="Chi nhánh trung tâm" style="" class="k-widget k-dropdown k-header dropdown-control dropdown-control-sm" unselectable="on" role="listbox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-owns="cbSelectBranch_listbox" aria-disabled="false" aria-busy="false" aria-activedescendant="5721bf21-4bbb-413c-bd10-78eac5273f68"><span unselectable="on" class="k-dropdown-wrap k-state-default"><span unselectable="on" class="k-input">Chi nhánh trung tâm</span><span unselectable="on" class="k-select"><span unselectable="on" class="k-icon k-i-arrow-s">select</span></span></span><select id="cbSelectBranch" class="dropdown-control dropdown-control-sm" skip-disable="" k-ng-model="vm.currentBranch" kendo-drop-down-list="vm.branchDropdown" k-options="vm.branchOptions" data-role="dropdownlist" style="display: none;">
                                <option value="1000269855" selected="selected">Chi nhánh trung tâm</option>
                            </select></span></div>
        <div class="page-footer-items page-footer-warehouses ng-hide" ng-show="vm.doneSyncForWarehouse &amp;&amp; vm.list_warehouses &amp;&amp; vm.list_warehouses.length >= 1 &amp;&amp; vm.isOnline &amp;&amp; vm.isUsingWarehouse">
            <i class="fal fa-warehouse-alt"></i><span title="" style="" class="k-widget k-dropdown k-header dropdown-control dropdown-control-sm" unselectable="on" role="listbox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-owns="cbSelectWarehouse_listbox" aria-disabled="false" aria-busy="false"><span unselectable="on" class="k-dropdown-wrap k-state-default"><span unselectable="on" class="k-input"></span><span unselectable="on" class="k-select"><span unselectable="on" class="k-icon k-i-arrow-s">select</span></span></span><select id="cbSelectWarehouse" class="dropdown-control dropdown-control-sm" skip-disable="" k-ng-model="vm.currentWarehouse" kendo-drop-down-list="vm.warehouseDropdown" k-options="vm.warehouseOptions" data-role="dropdownlist" style="display: none;"></select></span>
        </div>
        <div class="offline-status ng-hide" ng-show="($root.saleScreenMode === 1 || $root.saleScreenMode === 2 || $root.saleScreenMode === 3) &amp;&amp; !vm.isOnline">
            <i class="fas fa-wifi-slash"></i> Chế độ Offline
        </div><!---->
        <div class="page-footer-items page-footer-support font-bold" ng-if="!$root.session.isHiddenFeatures('support')">
            <i class="fas fa-phone"></i> 1900 6522
        </div><!----><!---->
        <div class="page-footer-usemanual" ng-if="(!$root.session.isHiddenFeatures('support') &amp;&amp; !vm.isUsingMultiCurrency)">
            <a href="https://www.kiotviet.vn/man-hinh-ban-hang-new-web-retail/" target="_blank" class="btn btn-icon btn-sm btn-icon-no-action btn-usemanual" uib-tooltip="Hướng dẫn sử dụng" tooltip-placement="top-right" tooltip-append-to-body="true"><i class="fas fa-question-circle"></i></a>
        </div><!----><!---->
        <div class="page-footer-rating" ng-if="!vm.isUsingMultiCurrency">
            <a class="btn btn-icon btn-sm btn-icon-no-action btn-rating font-bold" ng-click="vm.showRatingForm()" uib-tooltip="Góp ý" tooltip-placement="top-right" tooltip-append-to-body="true" href="javascript:void(0)"><i class="fas fa-comment-alt-edit"></i></a>
        </div><!----><!---->
    </div>
</footer-component>