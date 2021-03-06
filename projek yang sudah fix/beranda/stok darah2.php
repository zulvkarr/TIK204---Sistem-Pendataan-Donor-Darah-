<?php 
	session_start();
	include '../config.php';
	if($_SESSION['username'] != true){
		echo '<script>window.location="../login.php"</script>';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOODcare.</title>
    <link rel="stylesheet" href="beranda.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="stok darah.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>BLOOD CARE</a></div>
            <div class="menu">
                <ul>
                    <li><a href="stok darah.php">STOK DARAH</a></li>
                    <li><a href="pendonor.php">PENDONOR</a></li>
                    <li><a href="profile.php">PROFILE</a></li>
                    <li><a href="beranda.php">BACK</a></li>
                    <li><a href="../logout.php">LOG OUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
	<link rel="stylesheet" href="stok darah.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
    </div>
    <div class="flex flex-col app-bg-white-1 px-12 pb-10">
        <div class="flex flex-row py-5">
            
        </div>
        <div class="flex flex-row">
            <div class="flex flex-col w-40 bg-white pl-5 py-3 mr-3 rounded-tl-2xl rounded-tr-2xl app-bg-blue-1">
                <span class="text-3xl text-white font-bold">PMI</span>
                <span class="text-md text-white font-semibold">Banda Aceh</span>
                <ul>
                    <li><a href="stok darah.php">Click</a></li>
                </ul>
        </div>
            <div class="flex flex-col w-40 bg-white pl-5 py-3 mr-3 rounded-tl-2xl rounded-tr-2xl app-bg-blue-1">
                <span class="text-3xl text-white font-bold">RSU</span>
                <span class="text-md text-white font-semibold">Zainal Abidin</span>
                <ul>
                    <li><a href="stok darah2.php">Click</a></li>
                </ul>
        </div>
            <div class="flex flex-col w-40 bg-white pl-5 py-3 mr-3 rounded-tl-2xl rounded-tr-2xl app-bg-blue-3">
                <span class="text-3xl text-white font-bold">RS</span>
                <span class="text-md text-white font-semibold">Kajhu</span>
                <ul>
                    <li><a href="stok darah3.php">Click</a></li>
                </ul>
        </div>
            <div class="flex flex-col w-40 bg-white pl-5 py-3 mr-3 rounded-tl-2xl rounded-tr-2xl app-bg-blue-3">
                <span class="text-3xl text-white font-bold">INFO</span>
                <span class="text-md text-white font-semibold">Stok Darah</span>
                <ul>
                    <li><a href="https://tirto.id/prosedur-dan-cara-mendapatkan-darah-dari-pmi-ej8G">Click</a></li>
                </ul>        

        </div>
    </div>
    <div class="flex flex-row bg-white p-10 relative">
        <div class="absolute app-bg-yellow-3 text-xs font-semibold px-3 py-0.5 rounded-br-md rounded-tl-md text-white" style="top: 76px;">New</div>
        <table class="w-full">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th class="text-left text-xs app-color-black pb-5">Golongan Darah</th>
                    <th class="text-left text-xs app-color-black pb-5">Sisa Stok</th>
                    <th class="text-left text-xs app-color-black pb-5">Expired</th>
                    <th class="text-left text-xs app-color-black pb-5">Call Center</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr class="app-border-1">
                    <td>
                        <svg class="w-6 h-6 app-color-blue-3 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
                    </td>
                    <td>
                        <div class="flex justify-center items-center rounded-md w-8 h-8 app-bg-yellow-2 app-color-yellow-1 text-lg font-semibold">1</div>
                    </td>
                    <td>
                        <div class="flex flex-row py-3">
                            <div class="mr-5 w-10 h-10 bg-gray-100 rounded-full"></div>
                            <div class="flex flex-col">
                                <span class="font-semibold text-sm app-color-black">Golongan Darah A</span>
                                <span class="font-semibold text-xs app-color-gray-1"></span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="font-semibold text-sm app-color-gray-1">10 kantong</span>
                    </td>
                    <td>
                        <span class="font-semibold text-sm app-color-gray-1">28 Mei 2022</span>
                    </td>
                    <td>
                        <div class="app-bg-red-2 h-8 w-28 font-semibold text-sm flex justify-center items-center app-color-red-1 rounded-md">
                            0812 5475 5657
                        </div>
                    </td>
                    <td>
                        
                        </button>
                    </td>
                    <td>
                       

                    </td>
                </tr>
                <tr class="app-border-1">
                    <td class="w-6 h-6">
                        <svg class="ml-3 w-6 h-6 app-color-blue-3 mr-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
                    </td>
                    <td>
                        <div class="mr-4 w-8 h-8 rounded-md flex items-center justify-center app-bg-blue-2 app-color-blue-1 text-lg font-semibold">2</div>
                    </td>
                    <td>
                        <div class="flex flex-row items-center py-3">
                            <div class="w-10 h-10 bg-yellow-50 rounded-full mr-5"></div>
                            <div class="flex flex-col">
                                <span class="font-semibold text-sm app-color-black">Golongan Darah B</span>
                                <span class="font-semibold text-xs app-color-gray-1"></span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="font-semibold text-sm app-color-gray-1">kosong</span>    
                    </td>
                    <td>
                        <span class="font-semibold text-sm app-color-gray-1">---</span>
                    </td>
                    <td>
                        <div class="h-8 w-28 font-semibold text-sm app-bg-red-2 flex items-center justify-center app-color-red-1 rounded-md">
                            0812 5475 5657
                        </div>
                    </td>
                    <td>
                       
                    </td>
                    <td>
                       
                    </td>
                  </tr>
                  <tr class="app-border-1">
                    <td class="w-6 h-6">
                        <svg class="ml-3 w-6 h-6 app-color-blue-3 mr-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
                    </td>
                    <td>
                        <div class="mr-4 w-8 h-8 rounded-md flex items-center justify-center app-bg-yellow-2 app-color-yellow-1 text-lg font-semibold">3</div>
                    </td>
                    <td>
                        <div class="flex flex-row items-center py-3">
                            <div class="w-10 h-10 bg-green-100 rounded-full mr-5"></div>
                            <div class="flex flex-col">
                                <span class="font-semibold text-sm app-color-black">Golongan Darah AB
                                <span class="font-semibold text-xs app-color-gray-1"></span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="font-semibold text-sm app-color-gray-1">2 kantong</span>    
                    </td>
                    <td>
                        <span class="font-semibold text-sm app-color-gray-1">20 Mei 2022</span>
                    </td>
                    <td>
                        <div class="h-8 w-28 font-semibold text-sm app-bg-blue-2 flex items-center justify-center app-color-blue-1 rounded-md">
                            0812 5475 5657
                        </div>
                    </td>
                    <td>
                       
                    
                    </td>
                  </tr>
                  <tr class="app-border-1">
                    <td class="w-6 h-6">
                        <svg class="ml-3 w-6 h-6 app-color-blue-3 mr-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
                    </td>
                    <td>
                        <div class="mr-4 w-8 h-8 rounded-md flex items-center justify-center app-bg-blue-2 app-color-blue-1 text-lg font-semibold">4</div>
                    </td>
                    <td>
                        <div class="flex flex-row items-center py-3">
                            <div class="w-10 h-10 bg-pink-100 rounded-full mr-5"></div>
                            <div class="flex flex-col">
                                <span class="font-semibold text-sm app-color-black">Golongan Darah O</span>
                                <span class="font-semibold text-xs app-color-gray-1"></span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="font-semibold text-sm app-color-gray-1">Kosong</span>    
                    </td>
                    <td>
                        <span class="font-semibold text-sm app-color-gray-1">---</span>
                    </td>
                    <td>
                        <div class="h-8 w-28 font-semibold text-sm app-bg-blue-2 flex items-center justify-center app-color-blue-1 rounded-md">
                            0812 5475 5657
                        </div>
                    </td>
                    <td>
                       
                        </button>
                    </td>
                    <td>
                       
                    </td>
                  </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</body>
</html>