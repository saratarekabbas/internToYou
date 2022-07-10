<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate(); //deletes all the existing data
        Category::truncate();
        Job::truncate();

        //factory created
//       $user = User::factory(3)->create();

        $user = User::create([
            'name' => 'Sara',
            'username' => 'saratarek',
            'email' => 'sara@gmail.com',
            'password' => '$2y$10$mSeqweqVBkJZd6oZeUkOuupRrIg/AmNWFSv1w6V5L/MeHiWtrcnmG'
        ]);

        //specialized creation
        $it = Category::create([
            'name' => 'Information Technology',
            'slug' => 'information-technology'
        ]);

        $accounting = Category::create([
            'name' => 'Accounting',
            'slug' => 'accounting'
        ]);

       $business = Category::create([
            'name' => 'Business',
            'slug' => 'business'
        ]);

       Job::create([
           'user_id' => $user->id,
           'category_id' => $business->id,
           'title' => 'Digital Marketing Intern',
           'company' => 'Sterrific Agency',
           'slug' => 'digital-marketing-intern-sterrific-agency',
           'location' => 'Ara Damansara, Malaysia',
           'salary' => 500,
           'description' => 'A digital marketing intern at Sterrific Agency',
           'requirements' => 'Must be pursuing or possess a Bachelors Degree in business or related field (must indicate GPA in CV)',
           'benefits' => 'Company Trip & Activities',
           'body' => 'Usage of various SEO tools such as Google Search Console, Moz, Majestic, Ahrefs, etc., Create marketing and social media campaigns and strategies, including budget planning, content ideation, Grows and expands client social media presence into new social media platforms, plus increases presence on existing platforms including Facebook, LinkedIn, Twitter, and Instagram'
       ]);

        Job::create([
            'user_id' => $user->id,
            'category_id' => $accounting->id,
            'title' => 'Retail Accountant Intern',
            'company' => 'Qra Sdn Bhd',
            'slug' => 'retail-accountant-intern-at-qra-sdn-bhd',
            'location' => 'Mont Kiara, Malaysia',
            'salary' => 300,
            'description' => 'We are looking for interns who are looking for a meaningful job on a day-to-day basis to be part of the team as we believe this could be a win-win opportunity.',
            'requirements' => 'Strong communication skills in oral and written English',
            'benefits' => 'Annual Bonus and Performance Bonus',
            'body' => 'Ensure all the respective displays are properly stocked and organized. This includes ensuring the proper signage, right price and promotions are on display. Engaging and assisting customer queries, engaging with product information and assisting in various task such as weighing of produce.'
        ]);

        Job::create([
            'user_id' => $user->id,
            'category_id' => $it->id,
            'title' => 'Digital Developer Intern',
            'company' => 'Trinergy Digital Sdn Bhd',
            'slug' => 'digital-developer-intern-at-trinergy-digital-sdn-bhd',
            'location' => 'Damansara Uptown, Malaysia',
            'salary' => 800,
            'description' => 'Join development team in conveying problems, solutions, updates and project status to project management team.',
            'requirements' => 'Strong communication skills in oral and written English, Experience with Java programming languages',
            'benefits' => 'Medical Insurance and reimburements provided',
            'body' => 'Assist senior developer to plan and execute projects by ensuring that teams have appropriate technical specifications, clear and concise direction and resources to deliver projects effectively and on time, assist dev to supervise a team of developers by developing effective training procedures, appropriate task assignments, positive user experiences and top-quality control processes.'
        ]);

        Job::create([
            'user_id' => $user->id,
            'category_id' => $business->id,
            'title' => 'Global Business Services Hub Studnt Intern',
            'company' => 'Schlumberger Business Support Hub',
            'slug' => 'global-business-services-student-intern',
            'location' => 'Petaling Jaya, Malaysia',
            'salary' => 600,
            'description' => 'A business internship for students.',
            'requirements' => 'Currently pursuing degree in any related disciplines or equivalent.',
            'benefits' => 'Flexible work arrangements',
            'body' => 'An internship is your opportunity to understand how we work and whether our culture is right for you. It’s also your chance to show us that you have the right skills and attitude to succeed here. Our internships are paid positions—offering opportunities to use what you’ve learned at university on real projects. Specific job description will be discussed should you be shortlisted for the internship positions.'
        ]);

        Job::create([
            'user_id' => $user->id,
            'category_id' => $it->id,
            'title' => 'Software Engineering (AI/ML) Intern',
            'company' => 'AkiraKan Limited',
            'slug' => 'software-engineering-intern-ai-ml-akirakan-limited',
            'location' => 'KLCC, Malaysia',
            'salary' => 1000,
            'description' => 'Akirakan AI Program places the best students in positions where they will grow both technically and personally through their experience working closely with their manager, mentor, and team. We are dedicated to providing an accelerated learning internship experience by giving intern projects that are critical to their team’s success.',
            'requirements' => 'Proficiency in one or more of the following developer skills: Python, Go, Scala, C/C++, Java, Rust, JavaScript/TypeScript or other common industry languages.',
            'benefits' => 'Flexible and comfortable work environment',
            'body' => 'Autonomy Perception Team implement robust object detection and localization systems to improve transit, land transportation and marine operation. Our systems are used to detect people and objects on public roadways, highways and urban areas for traffic management applications as well as for vehicle localization to better serve public transit operations. The Autonomy Perception Team is also working to understand the human factors in order to improve the reliability of AI-based decision making.'
        ]);

                Job::create([
            'user_id' => $user->id,
            'category_id' => $it->id,
            'title' => 'Data Scientist Internship',
            'company' => 'Mostaqbal Limited',
            'slug' => 'data-scientist-at-mostaqbal-limited',
            'location' => 'Johor Bahru, Malaysia',
            'salary' => 600,
            'description' => 'We are dedicated to providing an accelerated learning internship experience by giving intern projects that are critical to their team’s success.',
            'requirements' => 'Proficiency in one or more of the following data science skills: Python, Go, Scala, C/C++, Java, Rust, JavaScript/TypeScript or other common industry languages',
            'benefits' => 'Flexible and comfortable work environment',
            'body' => 'Assist the team to implement robust object detection and localization systems to improve transit, land transportation and marine operation. Our systems are used to detect people and objects on public roadways, highways and urban areas for traffic management applications as well as for vehicle localization to better serve public transit operations. The Team is also working to understand the human factors in order to improve the reliability of AI-based decision making.'
        ]);

//        Template
//        Job::create([
//            'user_id' => $user->id,
//            'category_id' => $it->id,
//            'title' => 'D',
//            'company' => 'Th',
//            'slug' => 'h',
//            'location' => 'D',
//            'salary' => 800,
//            'description' => 'x',
//            'requirements' => 'x',
//            'benefits' => 'x',
//            'body' => 'x'
//        ]);


    }
}
