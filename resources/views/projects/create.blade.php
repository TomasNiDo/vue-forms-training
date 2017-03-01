@extends('layouts/master')

@section('content')
    <div class="projects-list">
        @include('projects.list')
    </div>
    <hr>
    <div id="app">
        <form method="POST" action="/projects" @submit.prevent="onSubmit" @keydown="form.errors.clear($event.target.name)">
            <label class="label">Project Name:</label>
            <p class="control">
              <input class="input" type="text" name="name" v-model="form.name">
              <span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
            </p>
            
            <label class="label">Project Description:</label>
            <p class="control">
              <input class="input" type="text" name="description" v-model="form.description">
              <span class="help is-danger" v-if="form.errors.has('description')" v-text="form.errors.get('description')"></span>
            </p>

            <p class="control">
              <button class="button is-primary" :disabled="form.errors.any()">Create</button>
            </p>
        </form>
    </div>
@endsection