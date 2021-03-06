@extends('layouts.default')

@section('head')

<title>Arquigrafia - Seu universo de imagens de arquitetura</title>

<!-- ISOTOPE -->
<script src="{{ URL::to("/") }}/js/jquery.isotope.min.js"></script>

<script type="text/javascript" src="{{ URL::to("/") }}/js/panel.js"></script>

@stop

@section('content')

    <!--   MEIO DO SITE - ÁREA DE NAVEGAÇÃO   -->
    <div id="content">
    	
      <div class="container">
        <div id="search_result" class="twelve columns row">
          
          @if (true)
          
            <h1>Resultado da busca avançada</h1>
            
            <!-- TAGS
            <p>Tags: 
            
            @foreach($tags as $k => $tag)
              
              @if ($k != count($tags)-1 )
              <a href="?q={{ $tag->name }}">{{ $tag->name }}</a>, 
              @else
              <a href="?q={{ $tag->name }}">{{ $tag->name }}</a>
              @endif
              
            @endforeach
            
            </p>
            -->
            
            <?php if ( count($photos) < 1 ) { ?>
              <p>Não encontramos nenhuma imagem.</p>
            <?php } else { ?>
              <p>Foram encontradas {{ count($photos) }} imagens.</p>
            <?php } ?>
            
          @else
            
            <h1>Busca avançada</h1>
            
          @endif
          
          <div class="eight columns alpha">
          <p>Campos vazios não serão considerados na busca. Todos os outros campos serão utilizados em uma busca tipo AND, isso quer dizer que apenas imagens que correspondam em todos os critérios serão mostradas.</p>
          </div>
          
        </div>
        
        {{ Form::open(array('url' => 'search/more', 'method' => 'get')) }}
        <div class="twelve columns row">
        
          <div class="four columns alpha row">
            <h3>Descrição</h3>
            <p>{{ Form::label('name', 'Título da imagem:') }} {{ Form::text('name', Input::get("name") ) }}</p>
            <p>{{ Form::label('description', 'Descrição da imagem:') }} {{ Form::text('description', Input::get("description") ) }}</p>
          </div>
          
          <div class="four columns row">
            <h3>Localização</h3>
            <p>{{ Form::label('city', 'Cidade:') }} {{ Form::text('city', Input::get("city") ) }}</p>
            <p>{{ Form::label('state', 'Estado:') }} {{ Form::text('state', Input::get("state") ) }}</p>
            <p>{{ Form::label('country', 'País:') }} {{ Form::text('country', Input::get("country") ) }}</p>
          </div>
          
          <div class="four columns omega row">
            <h3>Arquitetura</h3>
            <p>{{ Form::label('workAuthor', 'Arquiteto:') }} {{ Form::text('workAuthor', Input::get("country") ) }}</p>
          </div>
          
          <div class="six columns alpha row">
            <p>{{ Form::submit('BUSCAR', ['class'=>'btn']) }}</p>
          </div>
        
        </div>
        {{ Form::close() }}
        
      </div>
      
      <!--   PAINEL DE IMAGENS - GALERIA - CARROSSEL   -->  
      <div class="wrap">
        <div id="panel">
            
          @include('includes.panel')
          
        </div>
		<div class="panel-back"></div>
        <div class="panel-next"></div>
      </div>
      <!--   FIM - PAINEL DE IMAGENS  -->
	  
	        
    </div>
    <!--   FIM - MEIO DO SITE   -->
    
@stop