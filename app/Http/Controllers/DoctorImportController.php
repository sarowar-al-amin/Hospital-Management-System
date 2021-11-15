<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Imports\DoctorImport;

class DoctorImportController extends Controller
{
    //
    public function upload_multiple_doctor(Request $request){
        $file = $request->file('file')->store('import');

        $import = new DoctorImport;
        $import->import($file);

        if ($import->failures()->isNotEmpty()) {
            return back()->withFailures($import->failures());
        }


        return redirect()->back()->withStatus('Import in queue, we will send notification after import finished.');
    }
}
