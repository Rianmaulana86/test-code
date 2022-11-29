<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Login Page</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    

  

    
  </head>



  <body>


    <div class="flex items-center justify-center min-h-screen bg-gray-100">
      <div class="px-8 py-6 mt-4 text-left bg-white shadow-lg">
        
          <h3 class="text-2xl font-bold text-center">Login Pge</h3>
         
          <form action="/log" method="post">
            @csrf
              <div class="mt-4">
                  <div>
                      <label class="block" for="email">Email<label>
                              <input name="email" type="email" placeholder="Email" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" required>
                  </div>
                  <div class="mt-4">
                      <label class="block">Password<label>
                  <input name="password" type="password" placeholder="Password" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" required>
                  </div>
                  <div class="flex items-baseline justify-center">
                      <button type="submit" class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Login</button>
                 </div>
                 <div class="flex items-baseline justify-center mt-4"> 
                    <a class="text-decoration-none" href="/registrasi">Belum Punya Akun?, Daftar!!</a>
                 </div>
                 
              </div>
          </form>
      </div>
  </div>
  
  
  
 
  

      
  </body>
</html>
