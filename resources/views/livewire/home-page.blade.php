<div>
  {{--hero section start--}}


  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <title>
        Tailwind Starter Template - Landing Page Template: Tailwind Toolbox
      </title>
      <meta name="description" content="Simple landind page" />
      <meta name="keywords" content="" />
      <meta name="author" content="" />
      <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
      <!--Replace with your tailwind.css once created-->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
      <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
      <style>
        .gradient {
          background: linear-gradient(90deg, #1ab16d 0%, #51c3da 100%);
        }
      </style>
    </head>
    <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif; background: linear-gradient(90deg,  #1ab16d 0%, #51c3da 100%);">
      <!--Nav-->

      <!--Hero-->
      <div class="pt-24">
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
          <!--Left Col-->
          <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
            <p class="uppercase text-white tracking-loose w-full">Connaitre K2shop?</p>
            <h1 class="my-4 text-white text-5xl font-bold leading-tight">
              Depéchez -vous pour decouvrir K2shop
            </h1>
            <p class="leading-normal text-white text-2xl mb-8">
              Bienvenue à K2shop
            </p>
            <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
              Subscribe
            </button>
          </div>
          <!--Right Col-->
          <div class="w-full md:w-3/5 py-6 text-center">
            <img class="w-full md:w-4/5 z-50" src="Image/hero.png" />
          </div>
        </div>
      </div>
      <div class="relative -mt-12 lg:-mt-24">
        <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
              <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
              <path
                d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                opacity="0.100000001"
              ></path>
              <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
            </g>
            <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
              <path
                d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
              ></path>
            </g>
          </g>
        </svg>
      </div>



  {{--hero section end--}}
      <!-- BRAND SECTION -->
      <section class="bg-white py-20">
        <div class="max-w-xl mx-auto">
            <div class="text-center">
                <div class="relative flex flex-col items-center">
                    <h1 class="text-5xl  font-bold dark:text-gray-200"> Browse Popular<span style="background: linear-gradient(90deg, #1ab16d 0%, #51c3da 100%); -webkit-background-clip: text; color: transparent;"> Brands</span></h1>
                    <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                        <div class="flex-1 h-2 bg-blue-200"></div>
                        <div class="flex-1 h-2 bg-blue-400"></div>
                        <div class="flex-1 h-2 bg-blue-600"></div>
                    </div>
                </div>
                <p class="mb-12 text-base text-center text-gray-500">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque? Pariatur numquam, odio quod nobis ipsum ex cupiditate?
                </p>
            </div>
        </div>
        <div class="justify-center max-w-6xl px-4 py-4 mx-auto lg:py-0">
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-4 md:grid-cols-2">
                @foreach ($brands as $brand)
                <div class="bg-white shadow-md border border-primary bg-clip-border rounded-xl transition-transform transform hover:scale-105" wire:key="{{$brand->id}}">
                    <a href="/products?selected_brands[0]={{$brand->id}}" class="block">
                        <img src="{{url('storage',$brand->image)}}" alt="{{$brand->name}}" class="object-cover w-full h-64 rounded-t-lg transition-opacity hover:opacity-75">
                    </a>
                    <div class="p-5 text-center">
                        <a href="/products?selected_brands[0]={{$brand->id}}" class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-300 hover:text-transparent hover:bg-clip-text" style="background: linear-gradient(90deg, #1ab16d 0%, #51c3da 100%); -webkit-background-clip: text; color: transparent;">
                            {{$brand->name}}
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


      <!--END BRAND SECTION -->
    {{--categorie section--}}

    <div class="bg-white py-20">
      <div class="max-w-xl mx-auto">
          <div class="text-center">
              <div class="relative flex flex-col items-center">
                  <h1 class="text-5xl font-bold dark:text-gray-200"> Browse <span class="text-blue-500"> Categories </span> </h1>
                  <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                      <div class="flex-1 h-2 bg-blue-200"></div>
                      <div class="flex-1 h-2 bg-blue-400"></div>
                      <div class="flex-1 h-2 bg-blue-600"></div>
                  </div>
              </div>
              <p class="mb-12 text-base text-center text-gray-500">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque? Pariatur numquam, odio quod nobis ipsum ex cupiditate?
              </p>
          </div>
      </div>

      <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
          <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-6">
              @foreach ($categories as $category)
              <a class="group relative block bg-gray-100 rounded-lg overflow-hidden shadow-lg transform transition-transform hover:scale-105" href="/products?selected_categories[0]={{$category->id}}" wire:key="{{$category->id}}">
                  <img class="object-cover w-full h-48" src="{{url('storage',$category->image)}}" alt="{{$category->name}}">
                  <div class="absolute inset-0 bg-blue-600 bg-opacity-75 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                  <div class="absolute inset-0 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-center">
                      <h3 class="text-white text-xl font-bold" >{{$category->name}} Collection</h3>
                      <span class="text-white mt-2 flex items-center">
                          SHOP NOW
                          <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7" />
                          </svg>
                      </span>
                  </div>
              </a>
              @endforeach
          </div>
      </div>
  </div>




    {{--end categories section--}}


    {{--custmor Review section start--}}
    <section class="py-14 font-poppins dark:bg-gray-800" style='background:white'>
        <div class="max-w-6xl px-4 py-6 mx-auto lg:py-4 md:px-6">
          <div class="max-w-xl mx-auto">
            <div class="text-center ">
              <div class="relative flex flex-col items-center">
                <h1 class="text-5xl font-bold dark:text-gray-200"> Customer <span class="text-blue-500"> Reviews
                  </span> </h1>
                <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                  <div class="flex-1 h-2 bg-blue-200">
                  </div>
                  <div class="flex-1 h-2 bg-blue-400">
                  </div>
                  <div class="flex-1 h-2 bg-blue-600">
                  </div>
                </div>
              </div>
              <p class="mb-12 text-base text-center text-gray-500">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque?
                Pariatur
                numquam, odio quod nobis ipsum ex cupiditate?
              </p>
            </div>
          </div>

          <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 ">
            <div class="py-6 bg-white rounded-md shadow dark:bg-gray-900">
              <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b dark:border-gray-700">
                <div class="flex items-center px-6 mb-2 md:mb-0 ">
                  <div class="flex mr-2 rounded-full">
                    <img src="https://i.postimg.cc/rF6G0Dh9/pexels-emmy-e-2381069.jpg" alt="" class="object-cover w-12 h-12 rounded-full">
                  </div>
                  <div>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-300">
                      Adren Roy</h2>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Web Designer</p>
                  </div>
                </div>
                <p class="px-6 text-base font-medium text-gray-600 dark:text-gray-400"> Joined 12, SEP , 2022
                </p>
              </div>
              <p class="px-6 mb-6 text-base text-gray-500 dark:text-gray-400">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem cupiditate similique,
                iure minus sed fugit obcaecati minima quam reiciendis dicta!
              </p>
              <div class="flex flex-wrap justify-between pt-4 border-t dark:border-gray-700">
                <div class="flex px-6 mb-2 md:mb-0">
                  <ul class="flex items-center justify-start mr-4">
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                  </ul>
                  <h2 class="text-sm text-gray-500 dark:text-gray-400">Rating:<span class="font-semibold text-gray-600 dark:text-gray-300">
                      3.0</span>
                  </h2>
                </div>
                <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 dark:text-gray-400">
                  <div class="flex items-center">
                    <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                          <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                          </path>
                        </svg>
                      </a>
                      <span>12</span>
                    </div>
                    <div class="flex text-sm text-gray-700 dark:text-gray-400">
                      <a href="#" class="inline-flex hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-chat" viewBox="0 0 16 16">
                          <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                          </path>
                        </svg>Reply</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-6 bg-white rounded-md shadow dark:bg-gray-900">
              <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b dark:border-gray-700">
                <div class="flex items-center px-6 mb-2 md:mb-0 ">
                  <div class="flex mr-2 rounded-full">
                    <img src="https://i.postimg.cc/q7pv50zT/pexels-edmond-dant-s-4342352.jpg" alt="" class="object-cover w-12 h-12 rounded-full">
                  </div>
                  <div>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-300">
                      Sonira Roy</h2>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Manager</p>
                  </div>
                </div>
                <p class="px-6 text-base font-medium text-gray-600 dark:text-gray-400"> Joined 12, SEP , 2022
                </p>
              </div>
              <p class="px-6 mb-6 text-base text-gray-500 dark:text-gray-400">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem cupiditate similique,
                iure minus sed fugit obcaecati minima quam reiciendis dicta!
              </p>
              <div class="flex flex-wrap justify-between pt-4 border-t dark:border-gray-700">
                <div class="flex px-6 mb-2 md:mb-0">
                  <ul class="flex items-center justify-start mr-4">
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                  </ul>
                  <h2 class="text-sm text-gray-500 dark:text-gray-400">Rating:<span class="font-semibold text-gray-600 dark:text-gray-300">
                      3.0</span>
                  </h2>
                </div>
                <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 dark:text-gray-400">
                  <div class="flex items-center">
                    <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                      <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                          <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                          </path>
                        </svg></a>
                      <span>12</span>
                    </div>
                    <div class="flex text-sm text-gray-700 dark:text-gray-400">
                      <a href="#" class="inline-flex hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-chat" viewBox="0 0 16 16">
                          <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                          </path>
                        </svg>Reply</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-6 bg-white rounded-md shadow dark:bg-gray-900">
              <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b dark:border-gray-700">
                <div class="flex items-center px-6 mb-2 md:mb-0 ">
                  <div class="flex mr-2 rounded-full">
                    <img src="https://i.postimg.cc/JzmrHQmk/pexels-pixabay-220453.jpg" alt="" class="object-cover w-12 h-12 rounded-full">
                  </div>
                  <div>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-300">
                      William harry</h2>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Marketing Officer</p>
                  </div>
                </div>
                <p class="px-6 text-base font-medium text-gray-600 dark:text-gray-400"> Joined 12, SEP , 2022
                </p>
              </div>
              <p class="px-6 mb-6 text-base text-gray-500 dark:text-gray-400">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem cupiditate similique,
                iure minus sed fugit obcaecati minima quam reiciendis dicta!
              </p>
              <div class="flex flex-wrap justify-between pt-4 border-t dark:border-gray-700">
                <div class="flex px-6 mb-2 md:mb-0">
                  <ul class="flex items-center justify-start mr-4">
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                  </ul>
                  <h2 class="text-sm text-gray-500 dark:text-gray-400">Rating:<span class="font-semibold text-gray-600 dark:text-gray-300">
                      3.0</span>
                  </h2>
                </div>
                <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 dark:text-gray-400">
                  <div class="flex items-center">
                    <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                      <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                          <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                          </path>
                        </svg></a>
                      <span>12</span>
                    </div>
                    <div class="flex text-sm text-gray-700 dark:text-gray-400">
                      <a href="#" class="inline-flex hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-chat" viewBox="0 0 16 16">
                          <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                          </path>
                        </svg>Reply</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="py-6 bg-white rounded-md shadow dark:bg-gray-900">
              <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b dark:border-gray-700">
                <div class="flex items-center px-6 mb-2 md:mb-0 ">
                  <div class="flex mr-2 rounded-full">
                    <img src="https://i.postimg.cc/4NMZPYdh/pexels-dinielle-de-veyra-4195342.jpg" alt="" class="object-cover w-12 h-12 rounded-full">
                  </div>
                  <div>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-300">
                      James jack</h2>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Java Programmer</p>
                  </div>
                </div>
                <p class="px-6 text-base font-medium text-gray-600 dark:text-gray-400"> Joined 12, SEP , 2022
                </p>
              </div>
              <p class="px-6 mb-6 text-base text-gray-500 dark:text-gray-400">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem cupiditate similique,
                iure minus sed fugit obcaecati minima quam reiciendis dicta!
              </p>
              <div class="flex flex-wrap justify-between pt-4 border-t dark:border-gray-700">
                <div class="flex px-6 mb-2 md:mb-0">
                  <ul class="flex items-center justify-start mr-4">
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                          </path>
                        </svg>
                      </a>
                    </li>
                  </ul>
                  <h2 class="text-sm text-gray-500 dark:text-gray-400">Rating:<span class="font-semibold text-gray-600 dark:text-gray-300">
                      3.0</span>
                  </h2>
                </div>
                <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 dark:text-gray-400">
                  <div class="flex items-center">
                    <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                      <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                          <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                          </path>
                        </svg></a>
                      <span>12</span>
                    </div>
                    <div class="flex text-sm text-gray-700 dark:text-gray-400">
                      <a href="#" class="inline-flex hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-4 h-4 mr-1 text-blue-400 bi bi-chat" viewBox="0 0 16 16">
                          <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                          </path>
                        </svg>Reply</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    {{-- Customer review section End--}}

</div>
