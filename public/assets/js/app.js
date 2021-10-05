/* 

    public/assets/js/app.js

*/

$(function(){

    let html= ` <div class="col-md-6 d-flex ftco-animate">
    <div class="blog-entry justify-content-end">
        <a href="{{ route('posts.show', ['post' => $post->id, 'slug' =>Illuminate\Support\Str::slug($post->title)]) }}" class="block-20" style="background-image: url('{{ asset('assets/images/' . $post->image)}}');">
        </a>
        <div class="text p-4 float-right d-block">
            <div class="topper d-flex align-items-center">
                <div class="one py-2 pl-3 pr-1 align-self-stretch">
                    <span class="day">{{ $post->created_at->format('d')}}</span>
                </div>
                <div class="two pl-0 pr-3 py-2 align-self-stretch">
                    <span class="yr">{{ $post->created_at->format('Y')}}</span>
                    <span class="mos">{{ $post->created_at->format('M')}}</span>
                </div>
            </div>
            <h3 class="heading mb-3"><a href="#">{{$post->title}}</a></h3>
            <p>{{$post->resume}}</p>
            <p><a href="article.html" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
        </div>
    </div>
</div>`

    let offset=10;

    const baseURL = $('body').attr('data-baseURL');

    $('#older-posts').click(function(e){
        e.preventDefault();

        $.ajax({
            url : baseURL + '/ajax/older-posts',
            data: {
                offset: offset
            },
            method: 'get',

            success: function(responsePHP){
                $('#liste-posts').append(responsePHP);

                offset= offset +10;
                

            },

            error: function(){
                alert("Problem while transacting")
            }
        });
    });

});
