@extends('master')

@section('content')

<!-- Hero Section -->
  <section class="bg-blue-600 text-white py-20">
    <div class="max-w-4xl mx-auto text-center px-4">
      <h1 class="text-4xl font-bold mb-4">Welcome to MyWebsite</h1>
      <p class="text-lg mb-6">We help businesses grow online with modern solutions and beautiful designs.</p>
      <a href="#" class="bg-white text-blue-600 px-6 py-2 rounded hover:bg-gray-100 transition">Get Started</a>
    </div>
  </section>

  <!-- Services Section -->
  <section class="py-16 bg-gray-100">
    <div class="max-w-6xl mx-auto px-4 text-center">
      <h2 class="text-3xl font-semibold mb-10">Our Services</h2>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition">
          <h3 class="text-xl font-semibold mb-2">Web Design</h3>
          <p class="text-gray-600">Modern and responsive web design services tailored to your business.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition">
          <h3 class="text-xl font-semibold mb-2">Development</h3>
          <p class="text-gray-600">We build fast, scalable, and secure websites and applications.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition">
          <h3 class="text-xl font-semibold mb-2">Digital Marketing</h3>
          <p class="text-gray-600">Reach your audience through SEO, social media, and content strategies.</p>
        </div>
      </div>
    </div>
  </section>

@endsection