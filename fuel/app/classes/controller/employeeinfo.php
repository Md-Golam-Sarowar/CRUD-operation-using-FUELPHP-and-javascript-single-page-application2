<?php

class Controller_employeeinfo extends Controller_Rest
{	
	public function GET_index()
	{
		return Response::forge(View::forge('employeeinfo/index'));
	}

	public function GET_add()
	{
		return Response::forge(view::forge('employeeinfo/add.html'));
	}
	public function POST_add()
	{
		return Response::forge(view::forge('employeeinfo/index.php'));
	}

	public function GET_edit()
	{
		return Response::forge(view::forge('employeeinfo/add.html'));
	}
	public function POST_edit()
	{
		return Response::forge(view::forge('employeeinfo/index.php'));
	}

	public function GET_delete()
	{
		return Response::forge(view::forge('employeeinfo/delete.html'));
	}
}