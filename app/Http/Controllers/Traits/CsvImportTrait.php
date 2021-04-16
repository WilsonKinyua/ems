<?php

namespace App\Http\Controllers\Traits;

use App\Models\Custom;
use App\Models\Delegate;
use App\Models\Exhibitor;
use App\Models\GuestOfHonor;
use App\Models\Medias;
use App\Models\Partner;
use App\Models\Speaker;
use App\Models\Sponsor;
use App\Models\Visa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use SpreadsheetReader;

trait CsvImportTrait
{
    public function processCsvImport(Request $request)
    {
        try {
            $filename = $request->input('filename', false);
            $path     = storage_path('app/csv_import/' . $filename);

            $hasHeader = $request->input('hasHeader', false);

            $fields = $request->input('fields', false);
            $fields = array_flip(array_filter($fields));

            $modelName = $request->input('modelName', false);
            $model     = "App\Models\\" . $modelName;

            $reader = new SpreadsheetReader($path);
            $insert = [];

            foreach ($reader as $key => $row) {
                if ($hasHeader && $key == 0) {
                    continue;
                }

                $tmp = [];

                foreach ($fields as $header => $k) {
                    if (isset($row[$k])) {
                        $tmp[$header] = $row[$k];
                    }
                }

                if (count($tmp) > 0) {
                    $insert[] = $tmp;
                }
            }

            $for_insert = array_chunk($insert, 100);

            foreach ($for_insert as $insert_item) {
                if($model == Delegate::class) {

                    foreach ($insert_item as $item) {
                        $item["created_by_id"] = \Auth::user()->id;
                       $model::create($item);
                    }


                } elseif($model == Sponsor::class) {

                    foreach ($insert_item as $item) {
                        $item["created_by_id"] = \Auth::user()->id;
                       $model::create($item);
                    }

                } elseif($model == Speaker::class) {

                    foreach ($insert_item as $item) {
                        $item["created_by_id"] = \Auth::user()->id;
                       $model::create($item);
                    }
                } elseif($model == GuestOfHonor::class) {

                    foreach ($insert_item as $item) {
                        $item["created_by_id"] = \Auth::user()->id;
                       $model::create($item);
                    }
                }elseif($model == Exhibitor::class) {

                    foreach ($insert_item as $item) {
                        $item["created_by_id"] = \Auth::user()->id;
                       $model::create($item);
                    }
                }elseif($model == Medias::class) {

                    foreach ($insert_item as $item) {
                        $item["created_by_id"] = \Auth::user()->id;
                       $model::create($item);
                    }
                }elseif($model == Partner::class) {

                    foreach ($insert_item as $item) {
                        $item["created_by_id"] = \Auth::user()->id;
                       $model::create($item);
                    }
                }elseif($model == Custom::class) {

                    foreach ($insert_item as $item) {
                        $item["created_by_id"] = \Auth::user()->id;
                       $model::create($item);
                    }
                }elseif($model == Visa::class) {

                    foreach ($insert_item as $item) {
                        $item["created_by_id"] = \Auth::user()->id;
                       $model::create($item);
                    }
                } else {
                    $model::insert($insert_item);
                }

            }

            $rows  = count($insert);
            $table = Str::plural($modelName);

            File::delete($path);

            session()->flash('message', trans('global.app_imported_rows_to_table', ['rows' => $rows, 'table' => $table]));

            return redirect($request->input("redirect"));
        } catch (\Exception $ex) {
            throw $ex;
        }
    }

    public function parseCsvImport(Request $request)
    {
        $file = $request->file('csv_file');
        $request->validate([
            'csv_file' => 'mimes:csv,txt',
        ]);

        $path      = $file->path();
        $hasHeader = $request->input('header', false) ? true : false;

        $reader  = new SpreadsheetReader($path);
        $headers = $reader->current();
        $lines   = [];
        $lines[] = $reader->next();
        $lines[] = $reader->next();

        $filename = Str::random(10) . '.csv';
        $file->storeAs('csv_import', $filename);

        $modelName     = $request->input('model', false);
        $fullModelName = "App\Models\\" . $modelName;

        $model     = new $fullModelName();
        $fillables = $model->getFillable();

        $redirect = url()->previous();

        $routeName = 'admin.' . strtolower(Str::plural(Str::kebab($modelName))) . '.processCsvImport';

        return view('csvImport.parseInput', compact('headers', 'filename', 'fillables', 'hasHeader', 'modelName', 'lines', 'redirect', 'routeName'))->with('success', 'CSV uploaded successfully');
    }
}
