<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'id' => 1,
            'book_cover' => "book_covers/harrypotterandtheprisonerofazkaban.jpg",
            'name' => "Harry Potter and the Prisoner of Azkaban",
            'description' => "Harry Potter, along with his best friends, Ron and Hermione, is about to start his third year at Hogwarts School of Witchcraft and Wizardry. Harry can't wait to get back to school after the summer holidays. (Who wouldn't if they lived with the horrible Dursleys?) But when Harry gets to Hogwarts, the atmosphere is tense. There's an escaped mass murderer on the loose, and the sinister prison guards of Azkaban have been called in to guard the school...",
            'author' => "J.K. Rowling",
            'publisher' => "Bloomsbury (UK)",
            'published_year' => 1999,
            'isbn' => "0-7475-4215-5",
            'borrower_id' => null,
        ]);
        Book::create([
            'id' => 2,
            'book_cover' => "book_covers/1984.jpg",
            'name' => "1984",
            'description' => "A masterpiece of rebellion and imprisonment where war is peace freedom is slavery and Big Brother is watching. Thought Police, Big Brother, Orwellian - these words have entered our vocabulary because of George Orwell's classic dystopian novel 1984. The story of one man's Nightmare Odyssey as he pursues a forbidden love affair through a world ruled by warring states and a power structure that controls not only information but also individual thought and memory 1984 is a prophetic haunting tale More relevant than ever before 1984 exposes the worst crimes imaginable the destruction of truth freedom and individuality. With a foreword by Thomas Pynchon. This beautiful paperback edition features deckled edges and french flaps a perfect gift for any occasion.",
            'author' => "George Orwell",
            'publisher' => "Secker & Warburg",
            'published_year' => 1949,
            'isbn' => "978-0451524935",
            'borrower_id' => null,
        ]);
        Book::create([
            'id' => 3,
            'book_cover' => "book_covers/to_kill_a_mockingbird.jpg",
            'name' => "To Kill a Mockingbird",
            'description' => "The unforgettable novel of a childhood in a sleepy Southern town and the crisis of conscience that rocked it. \"To Kill A Mockingbird\" became both an instant bestseller and a critical success when it was first published in 1960. It went on to win the Pulitzer Prize in 1961 and was later made into an Academy Award-winning film, also a classic.\n\nCompassionate, dramatic, and deeply moving, \"To Kill A Mockingbird\" takes readers to the roots of human behavior - to innocence and experience, kindness and cruelty, love and hatred, humor and pathos. Now with over 18 million copies in print and translated into forty languages, this regional story by a young Alabama woman claims universal appeal. Harper Lee always considered her book to be a simple love story. Today it is regarded as a masterpiece of American literature.",
            'author' => "Harper Lee",
            'publisher' => "J.B. Lippincott & Co.",
            'published_year' => 1960,
            'isbn' => "978-0061120084",
            'borrower_id' => null,
        ]);
        Book::create([
            'id' => 4,
            'book_cover' => "book_covers/thegreatgatsby.jpg",
            'name' => "The Great Gatsby",
            'description' => "The Great Gatsby is a 1925 novel by American writer F. Scott Fitzgerald. Set in the Jazz Age on Long Island, near New York City, the novel depicts first-person narrator Nick Carraway's interactions with Jay Gatsby, the mysterious millionaire with an obsession to reunite with his former lover, Daisy Buchanan.\n\nThe novel was inspired by a youthful romance Fitzgerald had with socialite Ginevra King, and the riotous parties he attended on Long Island's North Shore in 1922. Following a move to the French Riviera, Fitzgerald completed a rough draft of the novel in 1924. He submitted it to editor Maxwell Perkins, who persuaded Fitzgerald to revise the work over the following winter. After making revisions, Fitzgerald was satisfied with the text, but remained ambivalent about the book's title and considered several alternatives. Painter Francis Cugat's dust jacket art, named Celestial Eyes, greatly impressed Fitzgerald, and he incorporated its imagery into the novel.",
            'author' => "F. Scott Fitzgerald",
            'publisher' => "Charles Scribner's Sons",
            'published_year' => 1925,
            'isbn' => "978-0743273565",
            'borrower_id' => null,
        ]);
        Book::create([
            'id' => 5,
            'book_cover' => "book_covers/pride_and_prejudice.jpg",
            'name' => "Pride and Prejudice",
            'description' => "Since its immediate success in 1813, Pride and Prejudice has remained one of the most popular novels in the English language. Jane Austen called this brilliant work \"her own darling child\" and its vivacious heroine, Elizabeth Bennet, \"as delightful a creature as ever appeared in print.\" The romantic clash between the opinionated Elizabeth and her proud beau, Mr. Darcy, is a splendid performance of civilized sparring. And Jane Austen's radiant wit sparkles as her characters dance a delicate quadrille of flirtation and intrigue, making this book the most superb comedy of manners of Regency England.",
            'author' => "Jane Austen",
            'publisher' => "T. Egerton",
            'published_year' => 1813,
            'isbn' => "978-1503290563",
            'borrower_id' => 2,
        ]);
        Book::create([
            'book_cover' => "book_covers/thedarkknightreturns.jpg",
            'name' => "The Dark Knight Returns",
            'description' => "The Dark Knight Returns (alternatively titled Batman: The Dark Knight Returns) is a 1986 four-issue comic book miniseries starring Batman, written by Frank Miller, illustrated by Miller and Klaus Janson, with color by Lynn Varley, and published by DC Comics. It tells an alternative story of Bruce Wayne, who at 55 years old returns from a decade of retirement to fight crime while facing opposition from the Gotham City police force and the United States government. The story also features the return of classic foes Two-Face and the Joker, and culminates in a confrontation with Superman, who is now a pawn of the government.\n\nWhen originally published, the series was simply titled Batman: The Dark Knight, with a different title for each issue (The Dark Knight Returns, The Dark Knight Triumphant, Hunt the Dark Knight, and The Dark Knight Falls), but when the series was collected into a single volume, the title of the first issue was applied to the entire series. Some of the earliest collected editions also bore the shorter series title. The story introduces Carrie Kelley as the new Robin and the hyper-violent street gang known as the Mutants. In the Pre-Flashpoint DC Multiverse, the events of The Dark Knight Returns and its associated titles were designated to occur on Earth-31.",
            'author' => "Frank Miller",
            'publisher' => "DC Comics",
            'published_year' => 1986,
            'isbn' => "978-1401264277",
            'borrower_id' => 3,
        ]);
    }
}
