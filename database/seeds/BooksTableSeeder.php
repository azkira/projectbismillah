<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::truncate();
        DB::table('books')->truncate();

        Book::create([
            'title' => 'Norwegian Wood',
            'author' => 'Haruki Murakami',
            'publisher' => 'Vintage',
            'synopsis' => "Watanabe, his classmate Kizuki, and Kizuki's girlfriend Naoko are the best of friends. Kizuki and Naoko are particularly close and feel as if they are soulmates, and Watanabe seems more than happy to be their enforcer. This idyllic existence is shattered by the unexpected suicide of Kizuki on his 17th birthday. Kizuki's death deeply touches both surviving friends; Watanabe feels the influence of death everywhere, while Naoko feels as if some integral part of her has been permanently lost.",
            'type' => 'Novel'
        ]);

        Book::create([
            'title' => '1Q84',
            'author' => 'Haruki Murakami',
            'publisher' => 'Vintage',
            'synopsis' => 'Aomame starts to have bizarre experiences, noticing new details about the world that are subtly different. For instance, she notices Tokyo police officers carrying automatic handguns, when they had previously carried revolvers. Aomame checks her memories against the archives of major newspapers and finds that there were several recent major news stories of which she has no recollection. One of these stories concerned a group of extremists who were engaged in a stand-off with police in the mountains of Yamanashi Prefecture.',
            'type' => 'Novel'
        ]);

        Book::create([
            'title' => '3D Kanojo Volume 1',
            'author' => 'Iroha Igarashi',
            'publisher' => 'Kodansha',
            'synopsis' => 'Komik karangan Mao Nanami yang diadaptasi menjadikan sebuah serial anime yang tokoh utamanya bernama Hikari Tsutsui yang biasa dipanggil Tsutsui adalah anak SMU kelas 3 yang menyukai anime dan game.',
            'type' => 'Comic'
        ]);

        Book::create([
            'title' => 'The Catcher in Rye',
            'author' => 'J.D Salinger',
            'publisher' => 'Brown and company',
            'synopsis' => "Holden recalls the events of the previous Christmas, beginning at Pencey Preparatory Academy, a boarding school in Pennsylvania. Holden has just learned that he won't be allowed back at Pencey after the Christmas break, due to his failing all classes except English. After forfeiting a fencing match in New York by forgetting the equipment on the subway, he goes and says goodbye to his history teacher, Mr. Spencer, who is a well-meaning but long-winded old man. Spencer offers him advice, but he embarrasses Holden by criticizing his history exam. ",
            'type' => 'Novel'
        ]);

        Book::create([
            'title' => 'Ikigai',
            'author' => 'Hector Garcia',
            'publisher' => 'Penguin Life',
            'synopsis' => "The people of Japan believe that everyone has an ikigai – a reason to jump out of bed each morning. And according to the residents of the Japanese island of Okinawa – the world’s longest-living people – finding it is the key to a longer and more fulfilled life.",
            'type' => 'Philosophy'
        ]);

        Book::create([
            'title' => 'Yuukyuu no Gusha Asley no, Kenja no Susume',
            'author' => 'Hifumi',
            'publisher' => 'Kodansha',
            'synopsis' => "Akhirnya tujuan balas dendamnya pun sirna, karena dia tidak tau balas dendam ke siapa lagi, familiarnya-pochi menyarankan untuk memulai kehidupan keduanya dengan keluar dari tempat penelitiannya untuk memulai hidup baru.. Nah, bagaimana kisahnya selanjutnya? Untuk detail manganya lebih lanjut bisa sobat lihat keterangan dibawah ini.",
            'type' => 'Comic'
        ]);

        Book::create([
            'title' => 'Redeeming Power: Understanding Authority and Abuse in the Church',
            'author' => 'Diane Langberg',
            'publisher' => 'Brazos Press',
            'synopsis' => "Power has a God-given role in human relationships and institutions, but it can lead to abuse when used in unhealthy ways. Speaking into current #MeToo and #ChurchToo conversations, this book shows that the body of Christ desperately needs to understand the forms power takes, how it is abused, and how to respond to abuses of power.",
            'type' => 'Psychology'
        ]);

        Book::create([
            'title' => 'The Silent Patient ',
            'author' => 'Alex Michaelides ',
            'publisher' => 'Celadon Books ',
            'synopsis' => "Alicia Berenson’s life is seemingly perfect. A famous painter married to an in-demand fashion photographer, she lives in a grand house with big windows overlooking a park in one of London’s most desirable areas. One evening her husband Gabriel returns home late from a fashion shoot, and Alicia shoots him five times in the face, and then never speaks another word.

            Alicia’s refusal to talk, or give any kind of explanation, turns a domestic tragedy into something far grander, a mystery that captures the public imagination and casts Alicia into notoriety. The price of her art skyrockets, and she, the silent patient, is hidden away from the tabloids and spotlight at the Grove, a secure forensic unit in North London.",
            'type' => 'Psychology'
        ]);

        Book::create([
            'title' => 'The Alchemist',
            'author' => 'Paulo Coelho',
            'publisher' => 'HarperOne',
            'synopsis' => "Paulo Coelho's enchanting novel has inspired a devoted following around the world. This story, dazzling in its powerful simplicity and soul-stirring wisdom, is about an Andalusian shepherd boy named Santiago who travels from his homeland in Spain to the Egyptian desert in search of a treasure buried near the Pyramids. Along the way he meets a Gypsy woman, a man who calls himself king, and an alchemist, all of whom point Santiago in the direction of his quest.",
            'type' => 'Novel'
        ]);

        Book::create([
            'title' => 'Where the Crawdads Sing',
            'author' => 'Delia Owens',
            'publisher' => 'G.P. Putnam’s Sons',
            'synopsis' => "For years, rumors of the “Marsh Girl” haunted Barkley Cove, a quiet fishing village. Kya Clark is barefoot and wild; unfit for polite society. So in late 1969, when the popular Chase Andrews is found dead, locals immediately suspect her.",
            'type' => 'Novel'
        ]);

        Book::create([
            'title' => "Breaking Bread with the Dead: A Reader's Guide to a More Tranquil Mind ",
            'author' => 'Alex Michaelides',
            'publisher' => 'Alan Jacobs',
            'synopsis' => "W. H. Auden once wrote that “art is our chief means of breaking bread with the dead.” In his brilliant and compulsively readable new treatise, Breaking Bread with the Dead, Alan Jacobs shows us that engaging with the strange and wonderful writings of the past might help us live less anxiously in the present—and increase what Thomas Pynchon once called our “personal density.”",
            'type' => 'Philosophy'
        ]);

        Book::create([
            'title' => "21 Lessons for the 21st Century",
            'author' => 'Yuval Noah Harari',
            'publisher' => 'Random House',
            'synopsis' => "How do computers and robots change the meaning of being human? How do we deal with the epidemic of fake news? Are nations and religions still relevant? What should we teach our children?",
            'type' => 'Philosophy'
        ]);
    }
}
