<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <title>Laravel</title>
        <link rel="stylesheet" href="../css/style.css">
        <script src="js/ajax.js"></script>
        <script src="js/ingatlan.js"></script>
        <script src="js/script.js"></script>
       



    
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <h1>Ajánlataink<h1>

                <div id="tablazat" class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Kategória</th>
                    <th scope="col">Leiras</th>
                    <th scope="col">hirdetes Dátuma</th>
                    <th scope="col">Tehermentes</th>
                    <th scope="col">Fénykép</th>

                  </tr>
                   <tr class="tablafoglaSablon">
                    <td class="kategoria"></td>
                    <td class="leiras"></td>
                    <td class="datum"></td>
                    <td class="tehermentes"></td>
                    <td class="fenykep"></td>
                    <td class="erdekel"><button >Érdekel</button></td>
                  </tr>
                </thead>
                
                <tbody class="tablafoglaSzulo">
                  
                 
                
                </tbody>
              </table>



                   
            </div>
        </div>

        <section>
    <h1>Új hírdetés elküldése</h1>

    <form>
    <select class="form-select" aria-label="Default select example">
  <option selected>Kérem válasszon</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select><br>

<label for="exampleFormControlTextarea1">Example textarea</label><br>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea><br>
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
    Tehermentes<br>
    <label for="exampleFormControlFile1">Fálj feltöltése</label>><br>
    <input type="file" class="form-control-file" id="exampleFormControlFile1"><br>

    <button type="submit" class="btn btn-primary">Küldés</button>

</form>
</section>






    </body>
</html>
