@extends('layouts.app')

@section('content')
    <div class="Użytkownik">
        <div class="wyszukiwanie1"></div>
       <div class="wyszukiwanie">
           <form action="" method="post">
               <div class="p">
               <label for="Skąd"></label>
                    <select id="Skąd">

                        <option selected>Skąd</option>
                        <option value="warszawa">Warszawa</option>
                        <option value="kraków">Kraków</option>
                        <option value="nowy_sacz">Nowy Sącz</option>
                        <option value="gdańsk">Gdańsk</option>
                        <option value="Ggdynia">Gdynia</option>
                        <option value="wrocław">Wrocław</option>
                        <option value="katowice">Katowice</option>

                    </select>
               </div>
               <div class="p">
               <label for="Dokąd"></label>
               <select id="Dokąd">

                   <option selected>Dokąd</option>
                   <option value="warszawa">Warszawa</option>
                   <option value="kraków">Kraków</option>
                   <option value="nowy_sacz">Nowy Sącz</option>
                   <option value="gdańsk">Gdańsk</option>
                   <option value="Ggdynia">Gdynia</option>
                   <option value="wrocław">Wrocław</option>
                   <option value="katowice">Katowice</option>

               </select>
               </div>

               <div class="p">
               <label for="Skąd"></label>
               <select id="Skąd">

                   <option selected>Skąd</option>
                   <option value="warszawa">Warszawa</option>
                   <option value="kraków">Kraków</option>
                   <option value="nowy_sacz">Nowy Sącz</option>
                   <option value="gdańsk">Gdańsk</option>
                   <option value="Ggdynia">Gdynia</option>
                   <option value="wrocław">Wrocław</option>
                   <option value="katowice">Katowice</option>
               </div>
               </select>


           </form>
       </div>
    </div>
@endsection
