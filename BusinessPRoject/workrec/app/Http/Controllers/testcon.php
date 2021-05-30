<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\challan;

class testcon extends Controller
{
    public function insertdata(Request $req)
    {
        foreach($req->quantity as $key => $value){
            $item = new product;
            $item->challan_id = $req->cid;
            
            $item->quantity = $value;
            $item->size = $req->sizes[$key];
            $item->type =$req->types[$key];
            $item->classes = $req->classes[$key];
            $item->rate = $req->rate[$key];
            $item->total = $req->amount[$key];
            $item->note = $req->note[$key];
            if($req->note[$key]==""){ $item->note="no note"; }
            
            $item->save();
        }
        return redirect('insertchallan');
    }
    public function insertc(Request $req)
    {
        $item = new challan;

        $item->challan_id = $req->cnum;
        $item->date = date('Y-m-d',strtotime($req->cdate));
        $item->status ="unpaid";

        $item->save();

        return view('insertrecord')->with('cid',$req->cnum);
    }
    public function cancelNexit($cid){
        $cdata = challan::where('challan_id',$cid)->delete();

        return redirect('/');
    }
    public function viewc()
    {
        $data =challan::orderBy('challan_id','asc')->get();

        return view('viewpage',['records'=>$data]);
    }
    public function view($cid)
    {
        $cdata = challan::where('challan_id',$cid)->get();
        $data = product::where('challan_id',$cid)->get();
        return view('viewrecpage',['records'=>$data],['crecords'=>$cdata]);
    }
    public function delete($cid)
    {
        $cdata = challan::where('challan_id',$cid)->delete();
        $data = product::where('challan_id',$cid)->delete();
        return redirect('viewc');
    }
    public function statchange($cid)
    {
        $data = challan::where('challan_id',$cid)->select('status')->get();
        if($data[0]['status'] == 'paid'){
            challan::where('challan_id',$cid)->update(['status' => "unpaid"]);
        }
        else{
            challan::where('challan_id',$cid)->update(['status' => "paid"]);
        }
    
        return redirect('viewc');
    }
}
