@extends('layouts.app')
@section('title', 'About')

@section('content')
    <x-header>
        {{ __('About Me') }} 🐑
    </x-header>
    <div class="container mt-4">
        <div class="col-md-8 mx-auto fs-4">
            <p>Hello there! Welcome to my blog. My name is Higor Carneiro, and I'm thrilled to have you here.</p>
            <p>At 24 years old, I'm a full-time Data Engineer and a passionate Laravel full-stack developer in my free time.
                I believe in the power of data to transform businesses and drive meaningful insights. My professional
                journey has allowed me to dive deep into the world of data, where I harness the potential of various tools
                and technologies to collect, process, and analyze data efficiently.</p>
            <p>Outside of my professional work, I find joy and fulfillment in exploring the Laravel framework. With its
                elegant syntax and extensive ecosystem, Laravel empowers me to create dynamic and scalable web applications.
                It's my creative outlet, where I can bring my ideas to life and continuously enhance my skills.</p>
            <p>Through this blog, I aim to share my knowledge, experiences, and insights in the field of data engineering
                and Laravel development. I'll be covering a wide range of topics, including best practices, tutorials, and
                tips that can help fellow developers and data enthusiasts excel in their journeys.</p>
            <p>Join me as we embark on this exciting adventure of exploring the realms of data engineering and Laravel
                development. Together, we'll unravel the complexities, unravel solutions, and celebrate the triumphs. Feel
                free to connect with me, ask questions, and engage in meaningful conversations. Let's learn and grow
                together!</p>
            <p>Thank you for visiting my blog, and I hope you find value and inspiration in the content I share.</p>
            <p>Happy reading!</p>
        </div>
    </div>
@endsection
