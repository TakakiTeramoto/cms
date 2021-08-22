<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          わたご酒店
      </h2>
  </x-slot>

  <section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">あなたにピッタリな日本酒をご紹介</h1>
      <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
      <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
      <div class="text-center lg:w-2/3 w-full">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">店主による日本酒診断！</h1>
        <p class="mb-8 leading-relaxed">たった1分！ボタンを押すだけ！</p>
        <form action="/question2" method="get">
        <div class="flex justify-center">
          <input type="radio" name="sex" value="1" checked>男性
          <input type="radio" name="sex" value="2">女性
          <input type="radio" name="sex" value="3">その他
        </div>
        <div class="flex justify-center">
          <input type="radio" name="age" value="1" checked>20代
          <input type="radio" name="age" value="2">
          <input type="radio" name="age" value="3">その他
        </div>
        <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
          <!--<button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button>-->
        </post>
      </div>
    </div>
  </section>
</x-app-layout>