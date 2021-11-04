<?php

namespace App\Models;


class Post 
{
    private static $blog_post = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Nobita Nobi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam amet sed blanditiis architecto obcaecati aut exercitationem aspernatur animi vel sit laboriosam at vitae, consequatur corporis voluptate adipisci recusandae, est necessitatibus vero saepe excepturi quisquam tenetur quos! Neque beatae reprehenderit accusantium nemo delectus, optio non maiores molestiae magnam dolorum vel saepe, dignissimos rerum eius illum doloremque voluptatum deleniti perspiciatis blanditiis sit iure ipsum laboriosam ex error. Expedita, accusamus in rem consequatur mollitia nam quos veritatis cumque vel exercitationem delectus sapiente incidunt doloremque quam praesentium rerum, fugiat natus quisquam iste. Dolor, a.',
    
        ],
        [
            'title' => 'Judul Post kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Nobita Nobi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam adipisci eaque tempore nobis repellat sed eum autem ipsam debitis molestiae temporibus in consequatur soluta eius vero reprehenderit laboriosam possimus tenetur, quam ullam, obcaecati necessitatibus iure voluptatum! Asperiores sint voluptate optio recusandae ullam repellendus eos, aspernatur, eveniet ipsum atque architecto. Recusandae cupiditate asperiores nisi explicabo! Natus nostrum dolore saepe molestias. Nisi saepe dolor quisquam! Impedit facere fugit voluptatum vitae provident, nesciunt, repudiandae vero autem ipsa dolorum nobis harum cumque. Sit error animi totam aut repudiandae voluptatibus eveniet earum qui ducimus, accusamus, architecto harum quod veritatis est dignissimos atque! Adipisci, dolorum repellendus!',
    
        ],
    
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $post = static::all();

        return $post->firstWhere('slug', $slug);
    }
}
