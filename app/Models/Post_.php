<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
    [
        'title' => 'Judul Pertama',
        'slug' => 'Judul Pertama',
        'author' => 'Anang Fatur Rohman',
        'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita non molestiae perspiciatis alias doloremque quaerat illum atque a, porro dolorum in at fugiat nobis numquam vitae, fugit, autem accusamus itaque! Illum placeat repellat corrupti vel doloribus harum vero, eligendi repellendus ab esse, neque architecto tenetur numquam quaerat optio nobis velit consectetur. Adipisci obcaecati, saepe ullam voluptatibus exercitationem molestias expedita? Officia, amet. Nulla, aspernatur quidem consequuntur vel voluptates quas voluptatem soluta placeat tempora architecto sunt reiciendis optio? Dignissimos dolorem similique quam molestias nemo eum aliquid. Velit labore, nam vero laboriosam dolorum eveniet quod qui facere amet pariatur officiis, officia eaque necessitatibus!'
    ],
    [
        "title" => "Judul Kedua",
        "slug" => "Judul Kedua",
        "author" => "Project`X",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, pariatur assumenda necessitatibus ipsa dicta corrupti unde incidunt suscipit voluptas non omnis soluta itaque laboriosam maxime. Quo magni praesentium quibusdam deserunt dolorem officiis. Necessitatibus esse reiciendis laborum, quos itaque vero perspiciatis hic deserunt sunt a neque maxime laboriosam ut, eos quas earum labore ex pariatur sed dolor odio expedita minus. Quos assumenda eius quod tenetur aut? Aspernatur, accusamus illum praesentium sequi quibusdam, reiciendis molestias nostrum saepe consectetur modi quos neque porro sit at eveniet assumenda repudiandae exercitationem, nesciunt ipsa hic atque molestiae cumque optio ratione. Explicabo iure minima delectus aliquam animi voluptate asperiores sint optio repudiandae magni hic voluptatem dolores, sit provident aspernatur consequatur a fuga. Eius ratione magni architecto a pariatur illo unde eum asperiores id soluta consequuntur iusto quisquam autem quis quidem enim voluptatibus repellendus, cupiditate inventore culpa laboriosam fuga. Earum recusandae omnis facilis animi eius quos tempore autem!"
    ]
];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
