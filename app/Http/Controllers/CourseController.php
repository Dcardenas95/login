<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request; #No dejes clases importadas sin usar, usa memoria

use App\Http\Requests\StoreCourseValidation;

class CourseController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$courses = Course::orderByDesc('id')->get();
		return view('courses/index', compact('courses'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('courses.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(StoreCourseValidation $request)
	{
		#No es necesario guardar los datos en una variable, es mejor pasar el $request->all() directamente al create
		#Y el create no es necesario meterlo en una variable que no se va a usar, eso gasta memoria.
		#En el redirect no es necesario aclarar la ruta, puedes pasarla como paramentro directamente a la fun redirect.
	
		$course = Course::create($request->all());
		return redirect('course.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Course  $course
	 * @return \Illuminate\Http\Response
	 */
	public function show(Course $course)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Course  $course
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Course $course)
	{
		return view('courses/edit', compact('course'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Course  $course
	 * @return \Illuminate\Http\Response
	 */
	public function update(StoreCourseValidation $request, Course $course)
	{
		#De igual forma, no es necesario guardar los datos en una variable, esto sólo es optimo si se va a usar más de una vez
		#En el redirect no es necesario aclarar la ruta, puedes pasarla como paramentro directamente a la fun redirect.
		$course->update($request->validated());
		return redirect('course.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Course  $course
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Course $course)
	{
		#En el redirect no es necesario aclarar la ruta, puedes pasarla como paramentro directamente a la fun redirect.
		$course->delete();
		return redirect('course.index');
	}
}
