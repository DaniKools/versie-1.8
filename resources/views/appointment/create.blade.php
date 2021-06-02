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
        <form action="{{route('appointments.store')}}" method="POST">
            @csrf
            <input type="hidden" name="customer_id" value="{{$customer_id}}">
            <div class="card">
                {{-- <div class="card_avatar">
                    <span>
                        <img class="customer_img" src="{{ asset('../images/upload_foto.png') }}" alt="">
                        <input name="upload" type="file">
                    </span>
                </div> --}}
                <div class="card_details card_form">
                    <input name="title" type="text" class="name input_field" placeholder="Title">
                    <div class="occupation">Title</div>

                    <div class="card_about">
                        <div class="item">
                            {{-- <input name="description" type="text" class="value input_field" placeholder="Description"> --}}
                            <textarea name="description" class="form-control value input_field" id="exampleFormControlTextarea1" rows="3" placeholder="Description"></textarea>
                            <span class="label">Description</span>
                        </div>
                        <div class="item">
                            <input name="location" type="text" class="value input_field" placeholder="Place">
                            <span class="label">Place</span>
                        </div>
                        <div class="item">
                            <input name="attendees" type="text" class="value input_field" placeholder="Involved">
                            <span class="label">Involved</span>
                        </div>
                        <div class="item">
                            <input name="appointment_date" class="value input_field" type="datetime-local"> 
                            <span class="label">Date</span>
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
