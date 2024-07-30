<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Http\Requests\StoreSuppliersRequest;
class SupplierController extends Controller
{
    public function addSupplier()
    {
        return view('pages.admin.suppliers.add-supplier');
    }
    public function store(StoreSuppliersRequest $request)
    {
        Supplier::create($request->all());

        return redirect()->route('supplier.add')->with('success', 'Nhà cung cấp đã được thêm thành công!');
    }
    public function list(Request $request)
    {
        $status = $request->input('status');

        $query = Supplier::query();

        if ($status && $status !== 'all') {
            $query->where('status', $status === 'active' ? 1 : 0);
        }

        $suppliers = $query->orderBy('id', 'desc')->get();

        return view('pages.admin.suppliers.list-supplier', ['suppliers' => $suppliers]);
    }
    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('pages.admin.suppliers.edit-supplier', compact('supplier'));
    }
    public function update(StoreSuppliersRequest $request, $id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->update($request->validated());
        return redirect()->back()->with('success', 'Nhà cung cấp đã được cập nhật thành công.');
    }
    public function delete($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();
        return redirect()->back()->with('success', 'Nhà cung cấp đã được xóa thành công.');
    }
}
