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
    Detail
@endsection


@section('content')
    <div class="page_section">
        <h2>Detail page, Customer</h2>
        <div class="card">
            <div class="card_avatar">
                <img class="customer_img" src="{{ asset('storage/' . $customer->profile_picture) }}" alt="">
            </div>
            <div class="card_details">
                <div class="name">{{$customer->contact_name}}</div>
                <div class="occupation">Position in company</div>

                <div class="card_about">
                    <div class="item">
                        <span class="value">{{$customer->company_name}}</span>
                        <span class="label">Company Name</span>
                    </div>
                    <div class="item">
                        <span class="value">{{$customer->email}}</span>
                        <span class="label">E-mail</span>
                    </div>
                    <div class="item">
                        <span class="value">{{$customer->phone}} </span>
                        <span class="label">Phone Number</span>
                    </div>
                </div>
                <div class="item buttons">
                    <a class="btn" id="card_btn-edit" href="{{route('customers.edit', $customer->id)}}">Edit Business card</a>
                    {{-- <a class="link" id="card_btn-del" href="#">Delete Business card</a> --}}
                    <form action="{{route('customers.destroy', $customer->id)}}" method="POST">
                        @method('delete')
                        @csrf
                        <input type="submit" value="Delete Business card" class="link btn btn-danger">
                    </form>
                </div>
            </div>
        </div>
        <a href="{{route('appointments.createFromCustomer', $customer)}}" class="btn btn-sucess">Make Appointment</a>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Date</th>
                <th scope="col">Title</th>
                <th scope="col">Place</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($customer->appointments as $appointment)
                  <tr>
                    <td>{{$appointment->appointment_date}}</td>
                    <td><a href="{{route('appointments.show', $appointment)}}">{{$appointment->title}}</a></td>
                    <td>{{$appointment->location}}</td>
                  </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection
