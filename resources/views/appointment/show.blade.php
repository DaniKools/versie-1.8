<?php
/**
 * Created by PhpStorm.
 * User: sova
 * Date: 2/22/2021
 * Time: 6:23 PM
 */
?>

@extends('layouts.master')

@section('title')
    Create
@endsection

@section('content')
    <div class="page_section">
        <h2>Appointment page, Customer</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}​</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="" method="POST">
            @csrf
            <div class="card">
                {{-- <div class="card_avatar">
                    <span>
                        <img class="customer_img" src="{{ asset('../images/upload_foto.png') }}" alt="">
                        <input name="upload" type="file">
                    </span>
                </div> --}}
                <div class="card_details card_form">
                    <div class="name">{{$appointment->title}}</div>
                    <div class="occupation">Title</div>



                    <div class="card_about">
                        <div class="item">
                            <a href="{{route('customers.show', $appointment->customer)}}">{{$appointment->customer->contact_name}}</a>
                            <span class="label">Customer</span>
                        </div>
                        <div class="item">
                            {{-- <input name="description" type="text" class="value input_field" placeholder="Description"> --}}
                            <span class="value">{{$appointment->description}}</span>
                            <span class="label">Description</span>
                        </div>
                        <div class="item">
                            <span class="value">{{$appointment->location}}</span>
                            <span class="label">Place</span>
                        </div>
                        <div class="item">
                            <span class="value">{{$appointment->attendees}}</span>
                            <span class="label">Involved</span>
                        </div>
                    </div>
                    <div class="item buttons_from">
                        <input type="submit" value="Confirm" class="btn card_btn-edit confirm_btn">
                        <a class="btn del_btn" href="{{route('home')}}">Cancel</a>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
