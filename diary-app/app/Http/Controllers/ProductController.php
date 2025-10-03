<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Show all products
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Show create form
    public function create()
    {
        return view('products.create');
    }

public function show($id)
{
    $product = Product::findOrFail($id);

    // Related products without category
    $relatedProducts = Product::where('id', '!=', $id)->take(4)->get();

    return view('products.show', compact('product', 'relatedProducts'));
}


    public function home()
    {
        return view('products');
    }

    // Save new product
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'discount' => 'nullable|numeric',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->discount = $request->discount;
        $product->description = $request->description;

        // Image upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/products'), $imageName);
            $product->image = $imageName;
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }

    // Show edit form
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    // Update product
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'discount' => 'nullable|numeric',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $product = Product::findOrFail($id);

        $imageName = $product->image; // keep old image
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/products'), $imageName);
        }

        $product->update([
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'discount' => $request->discount ?? 0,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    // Delete product
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Optional: delete old image file
        if ($product->image && file_exists(public_path('uploads/products/' . $product->image))) {
            unlink(public_path('uploads/products/' . $product->image));
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }

    // Show grid view (extra feature)
    public function grid()
    {
        $products = Product::all();
        return view('products.grid', compact('products'));
    }

    /////////////////////



    public function addToTable(Request $request, $name)
{
    // Find the product from your in-memory array (or predefined array)
    $allProducts = array_merge($this->milkProducts(), $this->dahiProducts(), $this->paneerProducts(), $this->butterProducts(), $this->gheeProducts(), $this->iceCreamProducts(), $this->lassiProducts(), $this->healthProducts());

    $productData = collect($allProducts)->firstWhere('name', $name);

    if(!$productData){
        return redirect()->back()->with('error', 'Product not found!');
    }

    // Insert into products table
    Product::create([
        'name' => $productData['name'],
        'category' => $productData['category'] ?? 'General',
        'price' => $productData['price'],
        'quantity' => $productData['quantity'] ?? 50, // default quantity
        'discount' => $productData['discount'] ?? 0,
        'description' => $productData['description'] ?? '',
        'image' => $productData['image'],
    ]);

    return redirect()->back()->with('success', $productData['name'].' added to products table successfully!');
}

//////////////////////

    public function milkProducts()
{
    return [
        ['id'=>1,'name'=>'Full Cream Milk 1L','price'=>65,'image'=>'https://images.unsplash.com/photo-1563636619-e9143da7973b?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>2,'name'=>'Toned Milk 1L','price'=>55,'image'=>'https://images.unsplash.com/photo-1574226516831-e1dff420e6f2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>3,'name'=>'Double Toned Milk 500ml','price'=>25,'image'=>'https://images.unsplash.com/photo-1574226516845-f0ef2b3b23a3?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>4,'name'=>'Skimmed Milk 1L','price'=>60,'image'=>'https://images.unsplash.com/photo-1574226516848-c3c7d3d4b6f5?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>5,'name'=>'Organic Cow Milk 1L','price'=>75,'image'=>'https://images.unsplash.com/photo-1574226516842-6a89d6b0c4f8?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>6,'name'=>'Buffalo Milk 1L','price'=>80,'image'=>'https://images.unsplash.com/photo-1574226516850-1b9c5f6f1f9e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>7,'name'=>'Flavored Milk Chocolate 200ml','price'=>30,'image'=>'https://images.unsplash.com/photo-1623058450328-6f8e0c2c43d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>8,'name'=>'Flavored Milk Mango 200ml','price'=>30,'image'=>'https://images.unsplash.com/photo-1623058450329-7d8c1d3e24e4?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>9,'name'=>'A2 Cow Milk 1L','price'=>120,'image'=>'https://images.unsplash.com/photo-1563636619-e9143da7973b?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>10,'name'=>'Long Life Milk 1L','price'=>90,'image'=>'https://images.unsplash.com/photo-1574226516834-e0f9a7c2a6b4?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
    ];

}

public function milk() {
    return view('products.category', [
        'categoryName' => 'Milk',
        'products' => $this->milkProducts()
    ]);
}




public function dahiProducts()
{
    return [
        ['id'=>11,'name'=>'Plain Dahi 500g','price'=>40,'image'=>'https://images.unsplash.com/photo-1617196032631-41f6b3f5f5d2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>12,'name'=>'Low Fat Dahi 1kg','price'=>75,'image'=>'https://images.unsplash.com/photo-1617196032632-41f6b3f5f5d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>13,'name'=>'Probiotic Dahi 200g','price'=>25,'image'=>'https://images.unsplash.com/photo-1617196032633-41f6b3f5f5d4?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>14,'name'=>'Flavored Dahi Mango','price'=>45,'image'=>'https://images.unsplash.com/photo-1617196032634-41f6b3f5f5d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>15,'name'=>'Greek Yogurt 400g','price'=>120,'image'=>'https://images.unsplash.com/photo-1617196032635-41f6b3f5f5d6?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>16,'name'=>'Matka Dahi 1kg','price'=>90,'image'=>'https://images.unsplash.com/photo-1617196032636-41f6b3f5f5d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>17,'name'=>'Organic Dahi 500g','price'=>65,'image'=>'https://images.unsplash.com/photo-1617196032637-41f6b3f5f5d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>18,'name'=>'Rich Creamy Dahi 1kg','price'=>110,'image'=>'https://images.unsplash.com/photo-1617196032638-41f6b3f5f5d9?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>19,'name'=>'Diet Friendly Dahi 200g','price'=>35,'image'=>'https://images.unsplash.com/photo-1617196032639-41f6b3f5f5da?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>20,'name'=>'Sweet Lassi Dahi Mix','price'=>50,'image'=>'https://images.unsplash.com/photo-1617196032640-41f6b3f5f5db?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
    ];

    
}

public function dahi() {
    return view('products.category', [
        'categoryName' => 'Dahi',
        'products' => $this->dahiProducts()
    ]);
}
////////////////////


public function gheeProducts()
{
    return [
        ['id'=>41,'name'=>'Cow Ghee 500ml','price'=>350,'category'=>'Ghee','image'=>'https://images.unsplash.com/photo-1623058450328-6f8e0c2c43d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>42,'name'=>'Buffalo Ghee 500ml','price'=>400,'category'=>'Ghee','image'=>'https://images.unsplash.com/photo-1623058450329-7d8c1d3e24e4?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>43,'name'=>'Organic Ghee 500ml','price'=>450,'category'=>'Ghee','image'=>'https://images.unsplash.com/photo-1623058450330-8f7c1d2d33f5?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>44,'name'=>'Desi Ghee 1L','price'=>750,'category'=>'Ghee','image'=>'https://images.unsplash.com/photo-1623058450331-9f8c1d2e44f6?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>45,'name'=>'Flavored Ghee 500ml','price'=>500,'category'=>'Ghee','image'=>'https://images.unsplash.com/photo-1623058450332-1f9c1d2f55f7?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
    ];
}


public function ghee()
{
    return view('products.category', [
        'categoryName' => 'Ghee',
        'products' => $this->gheeProducts()
    ]);
}


//////////////////////////////


public function paneerProducts()
{
    return [
        ['id'=>21,'name'=>'Plain Paneer 200g','price'=>60,'image'=>'https://images.unsplash.com/photo-1617196032641-41f6b3f5f5dc?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>22,'name'=>'Low Fat Paneer 250g','price'=>80,'image'=>'https://images.unsplash.com/photo-1617196032642-41f6b3f5f5dd?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>23,'name'=>'Shahi Paneer 200g','price'=>90,'image'=>'https://images.unsplash.com/photo-1617196032643-41f6b3f5f5de?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>24,'name'=>'Spiced Paneer 200g','price'=>95,'image'=>'https://images.unsplash.com/photo-1617196032644-41f6b3f5f5df?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>25,'name'=>'Paneer Cubes 500g','price'=>120,'image'=>'https://images.unsplash.com/photo-1617196032645-41f6b3f5f5e0?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>26,'name'=>'Herbal Paneer 250g','price'=>110,'image'=>'https://images.unsplash.com/photo-1617196032646-41f6b3f5f5e1?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>27,'name'=>'Tofu Paneer 200g','price'=>100,'image'=>'https://images.unsplash.com/photo-1617196032647-41f6b3f5f5e2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>28,'name'=>'Smoked Paneer 200g','price'=>130,'image'=>'https://images.unsplash.com/photo-1617196032648-41f6b3f5f5e3?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>29,'name'=>'Paneer Slices 250g','price'=>115,'image'=>'https://images.unsplash.com/photo-1617196032649-41f6b3f5f5e4?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>30,'name'=>'Tandoori Paneer 200g','price'=>140,'image'=>'https://images.unsplash.com/photo-1617196032650-41f6b3f5f5e5?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
    ];

    
}

public function paneer(){
    return view('products.category', [
        'categoryName' => 'Paneer',
        'products' => $this->paneerProducts()
    ]);
}
//////////////////////

public function butterProducts()
{
    return [
        ['id'=>31,'name'=>'Salted Butter 100g','price'=>50,'image'=>'https://images.unsplash.com/photo-1617196032651-41f6b3f5f5e6?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>32,'name'=>'Unsalted Butter 100g','price'=>55,'image'=>'https://images.unsplash.com/photo-1617196032652-41f6b3f5f5e7?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>33,'name'=>'Organic Butter 100g','price'=>70,'image'=>'https://images.unsplash.com/photo-1617196032653-41f6b3f5f5e8?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>34,'name'=>'Flavored Butter Garlic','price'=>80,'image'=>'https://images.unsplash.com/photo-1617196032654-41f6b3f5f5e9?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>35,'name'=>'Flavored Butter Herb','price'=>80,'image'=>'https://images.unsplash.com/photo-1617196032655-41f6b3f5f5ea?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>36,'name'=>'Creamy Butter 200g','price'=>95,'image'=>'https://images.unsplash.com/photo-1617196032656-41f6b3f5f5eb?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>37,'name'=>'Salted Butter 200g','price'=>90,'image'=>'https://images.unsplash.com/photo-1617196032657-41f6b3f5f5ec?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>38,'name'=>'Unsalted Butter 200g','price'=>95,'image'=>'https://images.unsplash.com/photo-1617196032658-41f6b3f5f5ed?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>39,'name'=>'Butter Spread 150g','price'=>85,'image'=>'https://images.unsplash.com/photo-1617196032659-41f6b3f5f5ee?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>40,'name'=>'Butter Cubes 100g','price'=>60,'image'=>'https://images.unsplash.com/photo-1617196032660-41f6b3f5f5ef?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
    ];

    
}

public function butter(){
    return view('products.category', [
        'categoryName' => 'Butter',
        'products' => $this->butterProducts()
    ]);
}


//////////////////////


public function iceCreamProducts()
{
    return [
        ['id'=>41,'name'=>'Vanilla Ice Cream 500ml','price'=>150,'image'=>'https://images.unsplash.com/photo-1617196032661-41f6b3f5f5f0?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>42,'name'=>'Chocolate Ice Cream 500ml','price'=>160,'image'=>'https://images.unsplash.com/photo-1617196032662-41f6b3f5f5f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>43,'name'=>'Strawberry Ice Cream 500ml','price'=>155,'image'=>'https://images.unsplash.com/photo-1617196032663-41f6b3f5f5f2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>44,'name'=>'Mango Ice Cream 500ml','price'=>150,'image'=>'https://images.unsplash.com/photo-1617196032664-41f6b3f5f5f3?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>45,'name'=>'Butterscotch Ice Cream 500ml','price'=>170,'image'=>'https://images.unsplash.com/photo-1617196032665-41f6b3f5f5f4?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>46,'name'=>'Cookies Ice Cream 500ml','price'=>180,'image'=>'https://images.unsplash.com/photo-1617196032666-41f6b3f5f5f5?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>47,'name'=>'Pista Ice Cream 500ml','price'=>190,'image'=>'https://images.unsplash.com/photo-1617196032667-41f6b3f5f5f6?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>48,'name'=>'Vanilla Chocolate Swirl 500ml','price'=>200,'image'=>'https://images.unsplash.com/photo-1617196032668-41f6b3f5f5f7?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>49,'name'=>'Chocolate Chip 500ml','price'=>210,'image'=>'https://images.unsplash.com/photo-1617196032669-41f6b3f5f5f8?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>50,'name'=>'Fruit Mix 500ml','price'=>220,'image'=>'https://images.unsplash.com/photo-1617196032670-41f6b3f5f5f9?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
    ];

    
}

public function iceCream(){
    return view('products.category', [
        'categoryName' => 'Ice Cream',
        'products' => $this->iceCreamProducts()
    ]);
}


///////////////////


public function lassiProducts()
{
    return [
        ['id'=>51,'name'=>'Sweet Lassi 200ml','price'=>40,'image'=>'https://images.unsplash.com/photo-1617196032671-41f6b3f5f5fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>52,'name'=>'Salted Lassi 200ml','price'=>35,'image'=>'https://images.unsplash.com/photo-1617196032672-41f6b3f5f5fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>53,'name'=>'Mango Lassi 200ml','price'=>50,'image'=>'https://images.unsplash.com/photo-1617196032673-41f6b3f5f5fc?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>54,'name'=>'Rose Lassi 200ml','price'=>55,'image'=>'https://images.unsplash.com/photo-1617196032674-41f6b3f5f5fd?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>55,'name'=>'Cardamom Lassi 200ml','price'=>60,'image'=>'https://images.unsplash.com/photo-1617196032675-41f6b3f5f5fe?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>56,'name'=>'Thick Lassi 200ml','price'=>45,'image'=>'https://images.unsplash.com/photo-1617196032676-41f6b3f5f5ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>57,'name'=>'Spiced Lassi 200ml','price'=>50,'image'=>'https://images.unsplash.com/photo-1617196032677-41f6b3f5f600?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>58,'name'=>'Strawberry Lassi 200ml','price'=>55,'image'=>'https://images.unsplash.com/photo-1617196032678-41f6b3f5f601?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>59,'name'=>'Chocolate Lassi 200ml','price'=>60,'image'=>'https://images.unsplash.com/photo-1617196032679-41f6b3f5f602?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>60,'name'=>'Vanilla Lassi 200ml','price'=>60,'image'=>'https://images.unsplash.com/photo-1617196032680-41f6b3f5f603?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
    ];

    
}

public function lassi(){
    return view('products.category', [
        'categoryName' => 'Lassi',
        'products' => $this->lassiProducts()
    ]);
}


////////////////////////


public function healthProducts()
{
    return [
        ['id'=>61,'name'=>'Multivitamin Capsule','price'=>500,'image'=>'https://images.unsplash.com/photo-1597848222623-d3f9c6ed60b2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>62,'name'=>'Vitamin C 500mg','price'=>300,'image'=>'https://images.unsplash.com/photo-1597848222624-d3f9c6ed60b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>63,'name'=>'Whey Protein 1kg','price'=>1200,'image'=>'https://images.unsplash.com/photo-1597848222625-d3f9c6ed60b4?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>64,'name'=>'Omega 3 Fish Oil','price'=>800,'image'=>'https://images.unsplash.com/photo-1597848222626-d3f9c6ed60b5?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>65,'name'=>'Calcium Tablet','price'=>400,'image'=>'https://images.unsplash.com/photo-1597848222627-d3f9c6ed60b6?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>66,'name'=>'Iron Supplement','price'=>350,'image'=>'https://images.unsplash.com/photo-1597848222628-d3f9c6ed60b7?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>67,'name'=>'Zinc Tablet','price'=>300,'image'=>'https://images.unsplash.com/photo-1597848222629-d3f9c6ed60b8?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>68,'name'=>'Biotin Capsule','price'=>450,'image'=>'https://images.unsplash.com/photo-1597848222630-d3f9c6ed60b9?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>69,'name'=>'Collagen Powder','price'=>900,'image'=>'https://images.unsplash.com/photo-1597848222631-d3f9c6ed60ba?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        ['id'=>70,'name'=>'Probiotic Capsule','price'=>600,'image'=>'https://images.unsplash.com/photo-1597848222632-d3f9c6ed60bb?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'],
        // Add remaining 20 as similar pattern...
    ];

    
}

public function healthProduct(){
    return view('products.category', [
        'categoryName' => 'Health Products',
        'products' => $this->healthProducts()
    ]);
}



}
