<div class="p-6 h-full w-full space-y-10">
    <div class="flex justify-between">
        <h5 class="mb-0 font-bold text-xl text-gray-700">
            Product List
        </h5>

        <a class="bg-sky-600 hover:bg-sky-800 text-white font-bold py-2 px-4 rounded cursor-pointer">
            Create New Product
        </a>
    </div>

    <div class="flex space-x-2">
        <livewire:components.input-text>
        <livewire:components.input-text>
        <livewire:components.input-text>
        <livewire:components.input-text>

        <button class="bg-sky-600 hover:bg-sky-800 text-white font-bold py-2 px-6 rounded cursor-pointer mb-4">
            Search
        </button>
    </div>

    <table class="table-auto w-full">
        <thead>
          <tr class="bg-gray-100">
            <th class="border px-4 py-2">Title</th>
            <th class="border px-4 py-2">Author</th>
            <th class="border px-4 py-2">Views</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border px-4 py-2">Intro to CSS</td>
            <td class="border px-4 py-2">Adam</td>
            <td class="border px-4 py-2">858</td>
          </tr>
          <tr class="bg-gray-100">
            <td class="border px-4 py-2">A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
            <td class="border px-4 py-2">Adam</td>
            <td class="border px-4 py-2">112</td>
          </tr>
          <tr>
            <td class="border px-4 py-2">Intro to JavaScript</td>
            <td class="border px-4 py-2">Chris</td>
            <td class="border px-4 py-2">1,280</td>
          </tr>
        </tbody>
      </table>
</div>
