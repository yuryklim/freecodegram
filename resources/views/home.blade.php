@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fdnk1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/70985486_577637296311063_2240788552625422336_n.jpg?_nc_ht=instagram.fdnk1-1.fna.fbcdn.net&_nc_ohc=mRf5dxOKh6sAX8L9eJh&oh=e1b0405bebd800a7aed28a1080d48ab7&oe=5EAA2DD7" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fdnk1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.40.823.823a/s640x640/72292509_1278992565617687_88713384388543519_n.jpg?_nc_ht=instagram.fdnk1-2.fna.fbcdn.net&_nc_cat=111&_nc_ohc=jazr0oEPRIMAX_g6VG8&oh=95fd56dafd6f55a5ebe086ee3fd22f7b&oe=5E7D4751" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fdnk1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.40.823.823a/s640x640/72292509_1278992565617687_88713384388543519_n.jpg?_nc_ht=instagram.fdnk1-2.fna.fbcdn.net&_nc_cat=111&_nc_ohc=jazr0oEPRIMAX_g6VG8&oh=95fd56dafd6f55a5ebe086ee3fd22f7b&oe=5E7D4751" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fdnk1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.40.823.823a/s640x640/72292509_1278992565617687_88713384388543519_n.jpg?_nc_ht=instagram.fdnk1-2.fna.fbcdn.net&_nc_cat=111&_nc_ohc=jazr0oEPRIMAX_g6VG8&oh=95fd56dafd6f55a5ebe086ee3fd22f7b&oe=5E7D4751" class="w-100">
        </div>
    </div>
</div>
@endsection
