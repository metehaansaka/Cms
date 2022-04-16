<?php

namespace App\Http\Controllers\Web;

use App\Exports\NewsletterExport;
use App\Http\Controllers\Controller;
use App\Mail\Contact;
use App\Mail\Kariyer;
use App\Mail\TeklifForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class ContactUsFormController extends Controller
{
    public function ContactUsForm(Request $request) {
        if ($request->email != null){
            $request->validate([
                'name' => 'required',
                'email' => "required|email",
                'message' => 'required'
            ]);
        }else{
            return back()->with('error',"E-posta veya Telefon Alanı Zorunludur!");
        }


        $contact = new Contact($request);
        Mail::to(getMailsTo(1))->send($contact);

        return back()->with('success', 'Mesajınız Başarıyla Bize Ulaşmıştır.');
    }


    public function ContactUsForm2(Request $request) {

        if ($request->email != null || $request->phone != null){
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'job' => 'required',
                'adet' => 'required',
                'ebat' => 'required',
                'sayfa' => 'required',
                'kagit' => 'required',
                'kapak' => 'required',
                'yan' => 'required',
                'ic_baski' => 'required',
                'kapak_baski' => 'required',
                'yan_kagit' => 'required',
                'laminasyon' => 'required',
                'lak' => 'required',
                'cilt' => 'required',
                'mukavva' => 'required',
                'diger' => 'required',
                'ambalaj' => 'required',
                'sevkiyat' => 'required',
                'odeme' => 'required',
                'teslim' => 'required'
            ]);


        }else{
            return back()->with('error',"Lütfen Zorunlu Alanları Doldurunuz!");
        }



        $teklif = new TeklifForm($request);
        Mail::to(getMailsTo(7))->send($teklif);
        return back()->with('success', 'Teklifiniz Başarıyla Bize Ulaşmıştır.');
    }

    public function ContactUsForm3(Request $request){
        if ($request->email != null || $request->phone != null){
            $request->validate([
                'name' => 'required',
            ]);
        }else{
            return back()->with('error',"E-posta veya Telefon Alanı Zorunludur!");
        }



        $kariyer = new Kariyer($request);
        Mail::to(getMailsTo(7))->send($kariyer);

        return redirect(url()->previous() )->with('success', 'Mesajınız Başarıyla Bize Ulaşmıştır.');
    }
    public function Newsletter(Request $request){
        DB::table('newsletter')->insert([
            'email' => $request->email
        ]);
        return back()->with('error',"Başarılı");
    }

    public function fileExport()
    {
        return Excel::download(new NewsletterExport, 'newsletter.xlsx');
    }


}
