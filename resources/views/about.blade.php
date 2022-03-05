@extends('layouts.app')

@section('content')
    
    <div class="container">
        
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center flex-column header">
                <a href="javascript:history.back()"><img src="../img/back.svg" alt="back_icon" class="back_icon"></a>
                <a href="index"><img src="../img/home.svg" alt="home_icon" class="home_icon"></a>
                <p class="header__p">Have fun scrolling through a vintage film posters based timeline or...</p>
                <a href="../asset/resume.pdf" download="resume.pdf" target="_blank"><button type="button" class="header__button">Just Download PDF Resume</button></a>
            </div>
        </div>

        <div class="row mt-5">
            <main class="main">
                <a href="../img/godzilla.png" target="_blank"><img src="../img/godzilla.png" alt="skills" class="main__skills"></a>
                <a href="../img/starwars.png" target="_blank"><img src="../img/starwars.png" alt="education" class="main__education"></a>
            </main>
        </div>
        
    </div>    
@endsection  
