public function search(Request $request)
{
    $priceFrom = $request->input('price_from');
    $priceTo = $request->input('price_to');
    $type = $request->input('type');
    $name = $request->input('name');
    
    $cars = Car::query();
    
    if ($priceFrom) {
        $cars->where('price_car', '>=', $priceFrom);
    }
    
    if ($priceTo) {
        $cars->where('price_car', '<=', $priceTo);
    }
    
    if ($type) {
        $cars->where('type_car', $type);
    }
    
    if ($name) {
        $cars->where('name_car', 'LIKE', '%'.$name.'%');
    }
    
    $cars = $cars->paginate(9);
    
    return view('product.index', compact('cars'));
}
