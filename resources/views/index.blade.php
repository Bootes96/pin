@extends('layouts.main')

@section('content')
    <div class="container flex h-full">
        <div class="w-1/5 sidebar bg-slate-600">
            <div class="flex header">
                <div class="logo size-14 bg-white mr-6">
                    <a href="{{url('/')}}">
                        <img src="{{ Vite::asset('resources/images/logo.jpg') }}" alt="">
                    </a>
                </div>
                <div class="">
                    <p class="text-white text-xs font-semibold">
                        Enterprise <br>
                        Resource <br>
                        Planning <br>
                    </p>
                </div>
            </div>
            <ul class="nav text-white text-m font-semibold ml-5 mt-10">
                <li>
                    <a href="">Продукты</a>
                </li>
            </ul>
        </div>
        <div class="w-4/5 main">
            <div class="container h-full">
                <div class="content-header flex justify-between">
                    <div class="tab ml-20 mt-6 w-20">
                        <div class="tab-content text-red-600 font-semibold border-b-2 border-b-red-600 pb-3">
                            Продукты
                        </div>
                    </div>
                    <div class="profile mt-6 mr-4">
                        <a href="" class="text-slate-400">Иванов Иван Иванович</a>
                    </div>
                </div>
                <div class="content-body flex justify-between pl-20 bg-slate-100">
                    <div class="attributes w-2/3 h-screen">
                        <table class="w-full text-left text-slate-600 border-separate border-spacing-y-6 border-slate-400">
                            <thead>
                              <tr>
                                <th>Артикул</th>
                                <th>Название</th>
                                <th>Статус</th>
                                <th>Атрибуты</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>mtkob-2</td>
                                <td>iphone-13</td>
                                <td>Доступен</td>
                                <td>Цвет: черный</td>
                              </tr>
                              <tr>
                                <td>mtkob-3</td>
                                <td>iphone-14</td>
                                <td>Не доступен</td>
                                <td>Цвет: белый</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                    <div class="add w-1/3 mt-5 pl-16">
                        <button type="button" class="text-white bg-sky-400 hover:bg-sky-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2  focus:outline-none">Добавить</button>
                    </div>
                </div>
            </div>
        </div>     
    </div>
@endsection