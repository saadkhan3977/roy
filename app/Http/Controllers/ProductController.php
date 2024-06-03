<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ChildCategory;
use App\Models\Brand;
use App\Models\ProductVaration;
use App\Imports\ProductImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::getAllProduct();
        //return $products;
        return view('backend.product.index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['brand'] = Brand::get();
        $data['categories'] = Category::where('status','active')->get();
        $data['subcategory'] = SubCategory::where('status','active')->get();
        $data['childcategory'] = ChildCategory::where('status','active')->get();
        // return $category;
        return view('backend.product.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $slug=Str::slug($request->title);
        $count= Product::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        // $data['slug']=$slug;
		$cat_idString = preg_replace('/[^\d,]/', '', $request->cat_id);
		$cat_id = implode(',', $cat_idString);
		
		$sub_cat_idString = preg_replace('/[^\d,]/', '', $request->sub_cat_id);
		$sub_cat_id = implode(',', $sub_cat_idString);
		
		$child_cat_idString = preg_replace('/[^\d,]/', '', $request->child_cat_id);
		$child_cat_id = implode(',', $child_cat_idString);
		
        $data = [
            'title'     => $request->title,
            'slug'     => $slug,
            'cat_id'    => $cat_id, 
            'sub_cat_id'    => $sub_cat_id, 
            'child_cat_id'    => $child_cat_id, 
            'brand_id'    => $request->brand_id, 
            'type'    => $request->type, 
            'sku'    => $request->sku, 
            'designer'    => $request->designer, 
            'description'    => $request->description, 
            'gender'    => $request->gender, 
            'notes'    => $request->notes, 
            'year_introduced'    => $request->year_introduced, 
            'recommended_use'    => $request->recommended_use, 
            'msrp'    => $request->msrp, 
            'wholsale_price'    => $request->price, 
			'discount_price' => $request->discount_price,
            'large_image'    => $request->large_image, 
            'slug'    => $slug, 
            'small_image'    => $request->small_image, 
            'url'    => $request->url, 
            'upc'    => $request->upc, 
            'stock'    => $request->stock, 
            'size'    => $request->size, 
            'color'    => '', 
            'status'    => $request->status, 
        ];
        // return $size;
        // return $data;
        $status=Product::create($data);
		if($request->size =='on'){
		foreach ($request->input('size_name') as $key =>  $variantData) {

            $fileName = null;
            $file = request()->file('file')[$key];
            $path = public_path('/uploads/product/size/');
            $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
            $file->move($path, $fileName);

            $variant = new ProductVaration([
                'size' => $request->size_name[$key],
                'color' => $request->color[$key],
                'price' => $request->size_price[$key],
				'discount_price' => $request->size_discount_price[$key],
                'image' => $fileName,
            ]);
            $status->variants()->save($variant);
        }
		}
		
        if($status){
            request()->session()->flash('success','Product Successfully added');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('product.index');

    }

    public function import() 
    {
        Excel::import(new ProductImport,request()->file('file'));
        request()->session()->flash('success','Product Successfully added');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['product']=Product::findOrFail($id);		
		$data['brand'] = Brand::get();
        $data['categories'] = Category::where('status','active')->get();
        $data['subcategory'] = SubCategory::where('status','active')->get();
        $data['childcategory'] = ChildCategory::where('status','active')->get();
		
        $items=Product::where('id',$id)->get();
		$data['variant'] = ProductVaration::where('product_id',$id)->get();

        // return $items;
        return view('backend.product.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		//return $request->all();
        $product=Product::findOrFail($id);
        $slug=Str::slug($request->title);
        $count= Product::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
		
		$cat_idString = preg_replace('/[^\d,]/', '', $request->cat_id);
		$cat_id = implode(',', $cat_idString);
		
		$sub_cat_idString = preg_replace('/[^\d,]/', '', $request->sub_cat_id);
		$sub_cat_id = implode(',', $sub_cat_idString);
		
		$child_cat_idString = preg_replace('/[^\d,]/', '', $request->child_cat_id);
		$child_cat_id = implode(',', $child_cat_idString);
        // return $request->child_cat_id;
       
        $data = [
            'title'     => $request->title,
            'slug'     => $slug,
            'cat_id'    => $cat_id, 
            'sub_cat_id'    => $sub_cat_id, 
            'child_cat_id'    => $child_cat_id, 
            'brand_id'    => $request->brand_id, 
            'type'    => $request->type, 
            'sku'    => $request->sku, 
            'designer'    => $request->designer, 
            'description'    => $request->description, 
            'gender'    => $request->gender, 
            'notes'    => $request->notes, 
            'year_introduced'    => $request->year_introduced, 
            'recommended_use'    => $request->recommended_use, 
            'msrp'    => $request->msrp, 
            'wholsale_price'    => $request->price, 
			'discount_price' => $request->discount_price,
            'large_image'    => $request->large_image, 
            'small_image'    => $request->small_image, 
            'url'    => $request->url, 
            'slug'    => $slug, 
            'upc'    => $request->upc, 
            'stock'    => $request->stock, 
            'size'    => $request->size, 
            'color'    => '', 
            'status'    => 'Active', 
        ];

        $status=$product->fill($data)->save();
        $variation = ProductVaration::where('product_id',$id)->get();
        if($request->size == 'on')
            {
            foreach($request->input('old_size_name') as $key =>  $variantData) 
            {
                
                if($request->varid[$key] == 0)
                {
                    $varient = ProductVaration::find($request->varid[$key]);

                    $fileName = $varient->image;
                    if (isset($request->old_file[$key])) {
                        $file = $request->file('old_file')[$key];
                        $path = public_path('/uploads/product/size/');
                        $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
                        $file->move($path, $fileName);
                    }
        
                    $varient->update([
                        'size' => $request->old_size_name[$key],
                        'color' => $request->old_color[$key],
                        'price' => $request->old_size_price[$key],
						'discount_price' => $request->size_discount_price[$key],
                        'image' => $fileName,
                    ]);
                }
            }
        }
        if($request->input('size_name'))
        {
            foreach($request->input('size_name') as $key =>  $variantData) 
            {
                
                $fileName = null;
                $file = request()->file('file')[$key];
                $path = public_path('/uploads/product/size/');
                $fileName = md5($file->getClientOriginalName()) . time() . "." . $file->getClientOriginalExtension();
                $file->move($path, $fileName);

                $variant = new ProductVaration([
                    'size' => $request->size_name[$key],
                    'color' => $request->color[$key],
                    'price' => $request->size_price[$key],
                    'image' => $fileName,
                ]);
                $product->variants()->save($variant);
                //$product->variants()->save($variant);
            }
        }
        if($status){
            request()->session()->flash('success','Product Successfully updated');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::findOrFail($id);
        $status=$product->delete();
        
        if($status){
            request()->session()->flash('success','Product successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting product');
        }
        return redirect()->route('product.index');
    }
	
	public function deletevariant($id)
    {
        $v = ProductVaration::find($id);
        \File::delete(public_path('/uploads/product/size/'.$v->image));
        ProductVaration::find($id)->delete();
        return response()->json(['success'=>'Deleted Successfully!']);
    }
	
	public function productSearch(Request $request){
        // return 'asd';
        //$recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(3)->get();
        $products=Product::with(['cat_info','sub_cat_info'])
        ->orwhere('title','like','%'.$request->search.'%')
                    ->orwhere('slug','like','%'.$request->search.'%')
                    ->orwhere('description','like','%'.$request->search.'%')
					->orwhere('sku','like','%'.$request->search.'%')
                   // ->orwhere('summary','like','%'.$request->search.'%')
                    ->orwhere('price','like','%'.$request->search.'%')
                    ->orderBy('id','DESC')
                    ->paginate('9');
        return view('backend.product.index')->with('products',$products);
        // return view('frontend.pages.product-lists')->with('products',$products)->with('recent_products',$recent_products);
    }
}
