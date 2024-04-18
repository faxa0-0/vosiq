<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Child;
use Illuminate\Validation\Rule;
class ChildRegistrationController extends Controller
{
    public function index(){
        $children=Child::paginate(1);
        
        return view('children.index',['children'=>$children]);
    }

    public function create(){
        return view('children.create');
    }

    public function register(Request $request)
    {
        $value = session('admin_email');
        $validatedData = $request->validate([
            'child_FIO' => 'required|string|max:255',
            'child_id_number'=>'required|numeric',
            'date_of_birth' => 'required|date',
            'date_of_enrollment' => 'required|date',
            'address' => 'required|string|max:255',
            'mother_FIO' => 'required|string|max:255',
            'mother_phone_number' =>  ['required', 'string' ],
            'mother_passport_series' => 'required|string|max:255',
            'father_FIO' => 'required|string|max:255',
            'father_phone_number' => ['required', 'string'],
            'father_passport_series' => 'required|string|max:255',
            'home_phone_number'=>'required',
            'email' => 'required|string|email|max:255|unique:children,email',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Правила для загрузки изображений
            'added_by'=>'nullable'//Session::get('user_name')
        ]);

        if ($request->hasFile('photo')) {
            // Получение имени файла
            $fileName = $request->file('photo')->getClientOriginalName();
            // Сохранение файла
            $request->file('photo')->storeAs('photos', $fileName, 'public');
            // Добавление имени файла в массив данных для сохранения в базе данных
            $validatedData['photo'] = $fileName;
        }
        $validatedData['added_by']=$value;

        $child = Child::create($validatedData);
        if ($child) {
            return redirect()->route('children.index')->with('success', 'Ребенок успешно зарегистрирован.');
        } else {
            return back()->withInput()->with('error', 'Что-то пошло не так. Пожалуйста, попробуйте еще раз.');
        }
    }

    public function show(Child $children){
        return view('children.show',['children'=>$children]);
    }

    public function edit(Child $children){
        return view('children.edit',['children'=>$children]);
    }

    public function update(Child $children,Request $request)
    {
        $validatedData = $request->validate([
            'child_FIO' => 'required|string|max:255',
            'child_id_number'=>'required|numeric',
            'date_of_birth' => 'required|date',
            'date_of_enrollment' => 'required|date',
            'address' => 'required|string|max:255',
            'mother_FIO' => 'required|string|max:255',
            'mother_phone_number' =>  ['required', 'string'],
            'mother_passport_series' => 'required|string|max:255',
            'father_FIO' => 'required|string|max:255',
            'father_phone_number' => ['required', 'string'],
            'father_passport_series' => 'required|string|max:255',
            'home_phone_number'=>'required',
            // 'email' => [
            //     'required',
            //     'string',
            //     'email',
            //     'max:255',
            //     Rule::unique('children')->ignore($child->id)],
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Правила для загрузки изображений
            //'added_by'=>'nullable'//Session::get('user_name')
        ]);

        if ($request->hasFile('photo')) {
            // Получение имени файла
            $fileName = $request->file('photo')->getClientOriginalName();
            // Сохранение файла
            $request->file('photo')->storeAs('photos', $fileName, 'public');
            // Добавление имени файла в массив данных для сохранения в базе данных
            $validatedData['photo'] = $fileName;
        }

        $children->update($validatedData);

        return redirect(route('children.index'))->with('success', 'Данные успешно изменены.');
    }

    public function destroy(Child $children){
        $children->delete();

        return redirect()->route('children.index')->with('success', 'Ребенок успешно удален.');
    }
}
