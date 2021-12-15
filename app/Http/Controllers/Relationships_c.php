<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile_bd;
use App\Models\Student_bd;
use App\Models\Customer_bd;
use App\Models\Produit_bd;
use App\Models\fk_customer_produit;


class Relationships_c extends Controller
{
    // one to one
    public function show($id)
    {
        $data=Student_bd::find($id)->profile->get();
        dd($data);

        return view('page',  ['data'=> $data]);

    }
    // many to manyKKC

    public function index($id)
    {
        $test=Customer_bd::find($id);
        $pro=Produit_bd::find($id);
        // $test2=Produit_bd::find($id)->customer()->pivot->is_manager->get();
        // $test->produit->attach($id);
        // foreach ($test->produit as $pro)
        // {
        // dump($pro);
        // dump($test2);
        // dd($test->produit);
    //  foreach($test->produit as $r){
    //     dd($r->price);
    // }

        // dd($test2);

        // dd($test->produit->pivot->is_manager->price);
        // ->withPivot('produits_id', 'customers_id');
        return view('manytomany', ['test'=> $test, 'pro'=> $pro]);

    }

    public function all()
    {
        $data_customer = Customer_bd::all();
        $data_produit = Produit_bd::all();
        return view('command', ['data_customer'=> $data_customer, 'data_produit'=> $data_produit]);

    }
    public function allproduit()
    {
        $data_produit = Produit_bd::all();
        return view('manytomany_store1', ['data_produit'=> $data_produit]);

    }
    public function allcustomer()
    {
        $data_customer = Customer_bd::all();
        return view('manytomany_store2', ['data_customer'=> $data_customer]);

    }
    // public function storecustomer(Request $request)
    // {

    //     $data_customer = new Customer_bd();
    //     $data_customer->email = request('email');
    //     $data_customer->adresse = request('adresse');
    //     $data_customer->adresse_postal = request('adresse_postal');
    //     // $data_produit->customer()->save($data_customer);
    //     $data_customer->save();

    //     return '<script>alert("success the operation one insert the customer ")</script>';

    // }
    // public function storeproduit(Request $request, $id)
    // {
    //     $data_customer = Customer_bd::find($id);
    //     $data_produit = new Produit_bd();
    //     $data_produit->price = request('price');
    //     $data_produit->produit_name = request('produit_name');
    //     $data_customer->produit()->save($data_produit);
    //     return '<script>alert("success the operation two insert the produit")</script>';

    // }
    /////
    public function storecustomer(Request $request)
    {

        $data_customer = new Customer_bd();
        $data_customer->email = request('email');
        $data_customer->adresse = request('adresse');
        $data_customer->adresse_postal = request('adresse_postal');
        // $data_produit->customer()->save($data_customer);
        $data_customer->save();
        $data_customer->produit()->attach(Produit_bd::where('price', 'Customer_bd')->first());

        return '<script>alert("success the operation one insert the customer ")</script>';

    }
    public function storeproduit(Request $request)
    {

        $data_produit = new Produit_bd();
        $data_produit->price = request('price');
        $data_produit->produit_name = request('produit_name');
        $data_produit->save();
        return '<script>alert("success the operation two insert the produit")</script>';

    }
    public function store_fk_pro(Request $request)
    {
        // $data_customer = Customer_bd::find($request->customer_id);
        $data_pro_cus =new fk_customer_produit();
        $data_pro_cus->produits_id= $request->produits_id;

        $data_pro_cus->customers_id= $request->customers_id;


        $data_pro_cus-> name = $request->name;


        $data_pro_cus->save();


        // $data_produit->produit_id = request('produit_id');
        //          $data_produit->price = request('price');
        // $data_produit->produit_name = request('produit_name');
        // $data_customer->produit()->save($data_produit);
        // the second

        // $data_produit = Produit_bd::find($id);
        // $data_customer = new Customer_bd();
        // // $data_customer->customer_id = request('customer_id');
        // $data_customer->email = request('email');
        // $data_customer->adresse = request('adresse');
        // $data_customer->adresse_postal = request('adresse_postal');
        // $data_produit->customer()->save($data_customer);
        return '<script>alert("success the operation two insert the produit")</script>';

    }
    // public function store_fk_cus(Request $request, $id)
    // {

    //     // the second

    //     $data_produit = Produit_bd::find($id);
    //     $data_customer = new Customer_bd();

    //     $data_customer->email = request('email');
    //     $data_customer->adresse = request('adresse');
    //     $data_customer->adresse_postal = request('adresse_postal');
    //     $data_produit->customer()->save($data_customer);
    //     return '<script>alert("success the operation two insert the produit")</script>';

    // }

         // get all produit and all customer
         public function get_table_customer()
         {
             $pro = Produit_bd::all();
             $cus = Customer_bd::all();
              return view('page_customer', ['pro'=> $pro, 'cus'=> $cus]);


         }
         public function get_table_produit()
         {
             $pro = Produit_bd::all();
             $cus = Customer_bd::all();
              return view('page_produit', ['pro'=> $pro, 'cus'=> $cus]);


         }
         public function destroy_produit($id)
         {
             $pro= Produit_bd::find($id);
             $pro->delete();
             return '<script>alert("successful");</script>';
         }
         public function index_produit($id)
         {
             $pro= Produit_bd::findOrfail($id);


             return view('edit_produit', ['pro'=> $pro]);
         }
         public function update_produit(Request $request, $id)
         {
            $update= Produit_bd::find($id);
            $update->price=request('price');
            $update->produit_name=request('produit_name');

            $update->save();

            return Redirect('get_table_produit');
         }
         public function destroy_customer($id)
         {
             $cus= Customer_bd::find($id);
             $cus->delete();
             return Redirect('get_table_customer');
            //  return '<script>alert("successful");</script>';
         }
         public function index_customer($id)
         {
             $cuss= Customer_bd::findOrfail($id);

             return view('edit_customer', ['cuss'=> $cuss]);
         }
         public function update_customer(Request $request, $id)
         {
            $update = Customer_bd::find($id);
            $update->email = request('email');
            $update->adresse = request('adresse');
            $update->adresse_postal = request('adresse_postal');
            $update->save();
            return Redirect('get_table_customer');

            //  return '<script>alert("successful");</script>';
         }
         public function add_customer()
         {
            return Redirect('allcustomer');
         }
         public function add_produit()
         {
            return Redirect('allproduit');
         }
         public function get_table_fk($id)
         {
             $prooo = fk_customer_produit::find($id)->get();
            //  dd($pro);
              // dd($data_bank->human());
             $cusss = fk_customer_produit::find($id)->get();
            //  $test=Customer_bd::find($id);
            //  $pro=Produit_bd::find($id);
            //  dd($cusss);
              return view('foriegn', ['prooo'=> $prooo, 'cusss'=> $cusss]);


         }
         public function destroy_fkc($id)
         {
            $cusss = fk_customer_produit::find($id);
             $cusss->delete();
            //  return Redirect('\get_table_fk');
             return '<script>alert("successful");</script>';
         }

}
