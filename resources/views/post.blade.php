<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  



  

<article class="py-8 max-w-screen-md border-b border-gray-300">

  <h2 class="mb-1 text-3xl tracking-light font-bold text-gray-900">{{ $post['title'] }}</h2>

  <div>
    By
    <a href="/authors/{{ $post->author->username }}" class="hover:text-gray-900 text-base text-gray-500" >{{ $post->author->name }}</a> 
    In
    <a href="/categories/{{ $post->category->slug }}" class="hover:text-gray-900 text-base text-gray-500">{{  $post->category->name  }}</a>| {{ $post->created_at->diffForHumans() }}
    </div>
  <p class="my-4 font-light">
    {{ $post['body'] }}
  </p>
  <a href="/posts" class="font-medium text-blue-500">&laquo; Back to Post</a>
</article>



 

</x-layout>


// 