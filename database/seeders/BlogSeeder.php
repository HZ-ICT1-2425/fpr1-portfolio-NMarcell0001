<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    public function run()
    {
        $blogs = [
            ['title' => 'Study Choice Blog', 'content' => 'First of all, I would definitely like to complete a masters program, which would probably either be an MBA or something related to IT.
            Second, I would most likely stay in the Netherlands and settle there as well.
            Regarding the field of my interests after the program, one of the key facts is that I would probably choose Business IT Consultant or Data Scientist as my specialization at the beginning of the third year. Thus, I would most likely advance in that given field to hopefully achieve a management-level role in the coming years. I generally like working with data, whether that is a text file with hundreds of different pieces of information that I have to organize in Python or a Microsoft Excel task.
            In addition, communicating with individuals is also something I am somewhat interested in.
            Regarding the learning path for the next four years, I aspire to be able to study independently on a much more advanced basis. I would also like to see myself mastering the fundamentals of what I will need in the future, whether that is a skill for a given job or a mindset for continuous learning.', 'slug' => 'study-choice'],
            ['title' => 'SWOT Analysis Blog', 'content' => 'Strengths: I am rather precise, I could also say I am responsible, I am always on time. I am also a very approachable person, so if anyone has a question, they can just ask me directly, and I will answer to the best of my knowledge. I would also say that I am willing to learn, especially if I can achieve something with that given knowledge. I try to do as much as possible as soon as I can to avoid leaving things until the last minute, which is why I would say I am rather organized. I am also very curious, so accepting new things is comfortable for me. Additionally, I tend to be creative, as I often come up with my own ideas.
            Weaknesses: Sometimes I am a bit lazy, and the ICT program will definitely provide a possible solution to that. Also, on rare occasions, I tend to defend an opinion or a statement without having 100 percent research on it. This can sometimes be an issue, as the information could be incorrect. However, it also encourages deeper learning curves in the given subjects or topics.

            Opportunities: Having an environment and community that provide motivation to learn even more and enhance my skills in the given subject. I also imagine having the opportunity to explore places in and around the Netherlands, which could lead to new connections, both at the university and outside of it.
            Threats: In todays world, having a lot of experience is often required for IT jobs, which is of course a challenge for someone who has just graduated from university. However, this challenge could be overcome during the internship or minor part of the program, as well as in the fourth year, where the focus is much more practical.', 'slug' => 'swot-analysis'],
            ['title' => 'Programming Experience Blog', 'content' => 'A very basic level of Python, as the high school leaving exam requires it. Plus, in the recent weeks or months, I actually got interested in it on a higher level, but that is it, nothing major really. I know how to write in a text file, how to read from one, I can use for and while loops, and essentially the very basic stuff in Python. I could also send examples if that helps.', 'slug' => 'programming-experience'],
            ['title' => 'First Feedback Blog', 'content' => 'Teachers feedback:
            Reading your motivation, nice to see that you are interested in a master program or MBA to get a deeper grasp of ICT. Do you already have any experience on this subject? It is also good that you are open to different tracks of our program. During the second year you will get better acquainted with BIC and DS and will have the chance to make a better choice. Interesting that you are already thinking about a management position. Besides programming, our program also focuses on personal development including four general competences every ICT person needs to master, namely Interact purposefully, Research-oriented problem-solving, Future-oriented organizing, and Personal leadership. You asked about Maths. Our program for the first year focuses mostly on programming (HTML, JavaScript, TypeScript, Laravel Framework). It is also very hands-on: A class or workshop in the morning, followed by small assignments (individual or in a group) and coming back for a checkpoint in the afternoon to discuss the findings. Besides, you will get more complex assignments on a weekly basis. There are also team projects during the second, third, and fourth quartiles where, next to development, you will also apply a professional way of work with Agile Scrum methodology.
            About bikes, I know the APV living quarters have a large parking area for the bikes inside the building. Cycling is a way of life in the Netherlands with lots of bike lanes to crisscross the country: more than 35,000km. Besides, it is safe to bike on the roads in the cities too: even in most one-way traffic, bikes are exempted. We may not have mountains, but we do have lots of trails, especially in the natural parks on the coastal dunes.
            And you were right about question 22. Some people need a special access card to use the lift or get more time to complete an exam. If that would be necessary, I would put the student in contact with the dean to make the arrangements as soon as possible.
            From your SWOT analysis: good that you already have the ability to plan your time and not leave things for the last minute. And as I mentioned before, research-oriented problem-solving may help you dig deeper into a subject. Not based on a single opinion, but on relevant studies from others.

            Feedback to the teachers feedback:
            Regarding the future MSc studies (Possible MBA or in IT), my only background is my parents working in finance or around that area, plus I have spoken to some professionals in the IT field as well, and the general response when I asked them if I should get a masters degree was a definitive yes.
            Plus, I have also experienced some form of leadership while being in online communities and groups, which in some cases enhanced my skills in that field and also contributed to my plans to go higher in terms of roles in a company. Though again, these are just plans.
            About any relevant IT experience: I would say I am rather good at Windows 10 troubleshooting, as my laptop sometimes decides to get BSODs every now and then, along with lots and lots of errors. Often I just say that whatever I get my hands on will randomly output an error.
            On biking: I actually saw the five-day trip they put out somewhere on HZs website, so I guess my interests in this area are covered pleasantly, activity-wise.', 'slug' => 'first-feedback'],
            ['title' => 'My Opinion on AI', 'content' => 'Artificial intelligence, while perceived by the Media as something extremely revolutionary, is actually a bunch of algorithms that do not really do much other than run if-else loops for eternity. The media overhypes it because they gain a lot of views by portraying a two-letter phrase that the audience can interpret in many ways, especially after all the movies about how robots will take over the world and such. In short, it is fear-mongering and intimidation of a technology that is still in its baby steps. Besides, it is not actually intelligent.', 'slug' => 'opinion-ai'],
        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}

