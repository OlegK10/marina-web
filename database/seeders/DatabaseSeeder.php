<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Course;
use App\Models\Service;
use App\Models\BlogPost;
use App\Models\Testimonial;
use App\Models\FAQ;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $admin = User::factory()->create([
            'name' => 'Marina',
            'email' => 'marina@example.com',
        ]);

        // Products
        Product::create([
            'name' => 'The Brand Blueprint',
            'slug' => 'the-brand-blueprint',
            'description' => 'A comprehensive guide to building a magnetic personal brand that attracts your dream clients. This 120-page ebook covers everything from defining your brand voice to creating a visual identity that stands out. Includes worksheets, templates, and real-world examples from successful entrepreneurs.',
            'short_description' => 'Build a magnetic personal brand that attracts dream clients.',
            'price' => 47.00,
            'type' => 'ebook',
            'image_url' => 'https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?w=600&q=80',
            'is_featured' => true,
            'is_active' => true,
            'sort_order' => 1,
        ]);

        Product::create([
            'name' => 'Instagram Growth Playbook',
            'slug' => 'instagram-growth-playbook',
            'description' => 'Master Instagram marketing with this step-by-step playbook. Learn the exact strategies I used to grow from 0 to 100K followers. Covers content strategy, hashtag research, Reels optimization, engagement tactics, and monetization strategies.',
            'short_description' => 'Step-by-step strategies to grow and monetize your Instagram.',
            'price' => 37.00,
            'type' => 'ebook',
            'image_url' => 'https://images.unsplash.com/photo-1611162617474-5b21e879e113?w=600&q=80',
            'is_featured' => true,
            'is_active' => true,
            'sort_order' => 2,
        ]);

        Product::create([
            'name' => 'Content Calendar Template Pack',
            'slug' => 'content-calendar-template-pack',
            'description' => 'Never run out of content ideas again. This template pack includes 12 months of content calendars, 365 post ideas, caption templates, and a Notion dashboard for planning your content strategy.',
            'short_description' => '12-month content planning system with 365+ post ideas.',
            'price' => 27.00,
            'type' => 'digital_download',
            'image_url' => 'https://images.unsplash.com/photo-1586281380349-632531db7ed4?w=600&q=80',
            'is_featured' => true,
            'is_active' => true,
            'sort_order' => 3,
        ]);

        Product::create([
            'name' => 'Sales Page Copy Toolkit',
            'slug' => 'sales-page-copy-toolkit',
            'description' => 'Write sales pages that convert with this proven toolkit. Includes fill-in-the-blank templates, headline formulas, objection-handling scripts, and a complete swipe file of high-converting copy.',
            'short_description' => 'Proven templates and formulas for high-converting sales pages.',
            'price' => 57.00,
            'type' => 'digital_download',
            'image_url' => 'https://images.unsplash.com/photo-1455390582262-044cdead277a?w=600&q=80',
            'is_featured' => false,
            'is_active' => true,
            'sort_order' => 4,
        ]);

        // Courses
        Course::create([
            'name' => 'Brand Mastery Academy',
            'slug' => 'brand-mastery-academy',
            'description' => 'The ultimate course for entrepreneurs who want to build a powerful personal brand. Over 8 modules, you\'ll learn brand positioning, visual identity, content strategy, audience building, and monetization. Includes live Q&A sessions and a private community.',
            'short_description' => 'Build a powerful personal brand in 8 comprehensive modules.',
            'price' => 497.00,
            'image_url' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&q=80',
            'lessons_count' => 42,
            'duration' => '8 weeks',
            'is_featured' => true,
            'is_active' => true,
            'sort_order' => 1,
        ]);

        Course::create([
            'name' => 'Instagram Business Bootcamp',
            'slug' => 'instagram-business-bootcamp',
            'description' => 'Transform your Instagram into a client-generating machine. This 6-week bootcamp covers profile optimization, content creation, Reels strategy, Stories that sell, DM scripts, and converting followers into paying clients.',
            'short_description' => 'Transform your Instagram into a client-generating machine.',
            'price' => 297.00,
            'image_url' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&q=80',
            'lessons_count' => 28,
            'duration' => '6 weeks',
            'is_featured' => true,
            'is_active' => true,
            'sort_order' => 2,
        ]);

        Course::create([
            'name' => 'Sales Funnel Blueprint',
            'slug' => 'sales-funnel-blueprint',
            'description' => 'Learn how to create automated sales funnels that work while you sleep. From lead magnets to email sequences to high-converting landing pages, this course gives you the complete system.',
            'short_description' => 'Create automated sales funnels that convert on autopilot.',
            'price' => 397.00,
            'image_url' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&q=80',
            'lessons_count' => 35,
            'duration' => '6 weeks',
            'is_featured' => true,
            'is_active' => true,
            'sort_order' => 3,
        ]);

        // Services
        Service::create([
            'name' => '1:1 Strategy Consultation',
            'slug' => 'strategy-consultation',
            'description' => 'A focused 60-minute session where we dive deep into your business challenges and create a clear action plan. Perfect for entrepreneurs who need expert guidance on branding, marketing strategy, or business growth. You\'ll walk away with specific, actionable steps tailored to your unique situation.',
            'short_description' => 'A focused 60-minute strategy session for your business.',
            'price' => 197.00,
            'type' => 'consultation',
            'duration_minutes' => 60,
            'is_featured' => true,
            'is_active' => true,
            'sort_order' => 1,
        ]);

        Service::create([
            'name' => 'Instagram Account Audit',
            'slug' => 'instagram-account-audit',
            'description' => 'Get a comprehensive review of your Instagram presence. I\'ll analyze your profile, content strategy, engagement patterns, and growth opportunities. You\'ll receive a detailed PDF report with specific recommendations to optimize your account for maximum impact and follower growth.',
            'short_description' => 'Comprehensive Instagram review with actionable recommendations.',
            'price' => 97.00,
            'type' => 'audit',
            'duration_minutes' => null,
            'is_featured' => true,
            'is_active' => true,
            'sort_order' => 2,
        ]);

        Service::create([
            'name' => 'VIP Mentoring Program',
            'slug' => 'vip-mentoring-program',
            'description' => 'An intensive 3-month mentoring program for serious entrepreneurs ready to scale. Includes weekly 1:1 calls, unlimited Voxer/WhatsApp access, custom strategy development, accountability check-ins, and access to all my courses and resources. Limited to 5 clients per quarter.',
            'short_description' => 'Intensive 3-month program with weekly calls and unlimited support.',
            'price' => 2497.00,
            'type' => 'mentoring',
            'duration_minutes' => null,
            'is_featured' => true,
            'is_active' => true,
            'sort_order' => 3,
        ]);

        // Blog Posts
        BlogPost::create([
            'title' => '10 Branding Mistakes That Are Costing You Clients',
            'slug' => '10-branding-mistakes-costing-clients',
            'content' => '<h2>Are These Branding Mistakes Holding You Back?</h2><p>In my 10+ years of working with entrepreneurs, I\'ve seen the same branding mistakes over and over again. The good news? They\'re all fixable. Let\'s dive into the top 10 mistakes that might be costing you clients right now.</p><h3>1. Not Having a Clear Brand Message</h3><p>If you can\'t explain what you do in one sentence, your potential clients won\'t understand it either. Your brand message should be crystal clear and immediately communicate the transformation you provide.</p><h3>2. Trying to Appeal to Everyone</h3><p>When you try to speak to everyone, you end up speaking to no one. Define your ideal client avatar and create content specifically for them.</p><h3>3. Inconsistent Visual Identity</h3><p>Using different colors, fonts, and styles across platforms creates confusion. Invest in a cohesive visual identity that\'s recognizable everywhere.</p><h3>4. Neglecting Your Brand Story</h3><p>People connect with stories, not sales pitches. Share your journey, your struggles, and your wins to build authentic connections.</p><h3>5. Underpricing Your Services</h3><p>Your pricing communicates your value. When you underprice, you attract clients who don\'t value your expertise.</p><p>Ready to fix these mistakes? Book a consultation and let\'s transform your brand together.</p>',
            'excerpt' => 'Discover the most common branding mistakes entrepreneurs make and learn how to fix them to attract more clients.',
            'image_url' => 'https://images.unsplash.com/photo-1553877522-43269d4ea984?w=800&q=80',
            'author_id' => $admin->id,
            'is_published' => true,
            'published_at' => now()->subDays(3),
        ]);

        BlogPost::create([
            'title' => 'How to Create a Content Strategy That Actually Works',
            'slug' => 'content-strategy-that-works',
            'content' => '<h2>Stop Posting Randomly and Start Growing</h2><p>A content strategy isn\'t about posting every day — it\'s about posting with purpose. Here\'s my framework for creating content that attracts, engages, and converts your ideal clients.</p><h3>The 3-Pillar Content Framework</h3><p>Every piece of content should fall into one of three categories: Educate, Inspire, or Convert. This ensures your feed stays balanced and serves your audience at every stage of their journey.</p><h3>Planning Your Content Calendar</h3><p>I recommend batching your content creation. Spend one day per week creating all your content for the following week. This saves time and ensures consistency.</p><p>Want the full content strategy template? Grab my Content Calendar Template Pack!</p>',
            'excerpt' => 'Learn the 3-pillar framework for creating content that attracts, engages, and converts your ideal clients.',
            'image_url' => 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=800&q=80',
            'author_id' => $admin->id,
            'is_published' => true,
            'published_at' => now()->subDays(7),
        ]);

        BlogPost::create([
            'title' => 'The Ultimate Guide to Pricing Your Services',
            'slug' => 'ultimate-guide-pricing-services',
            'content' => '<h2>Charge What You\'re Worth</h2><p>Pricing is one of the biggest challenges for service-based entrepreneurs. Too low and you burn out; too high and you scare people away. Here\'s how to find your sweet spot.</p><h3>Value-Based Pricing</h3><p>Stop charging by the hour. Instead, price based on the value and transformation you provide. What is the result worth to your client?</p><h3>The Pricing Formula</h3><p>Consider: your expertise + the transformation + market demand + your positioning = your price. Don\'t forget to factor in your business expenses and desired profit margin.</p>',
            'excerpt' => 'Stop undercharging. Learn how to price your services based on value, not hours.',
            'image_url' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=800&q=80',
            'author_id' => $admin->id,
            'is_published' => true,
            'published_at' => now()->subDays(14),
        ]);

        // Testimonials
        Testimonial::create([
            'name' => 'Sarah Thompson',
            'role' => 'Life Coach & Speaker',
            'content' => 'Working with Marina completely transformed my business. Within 3 months, I doubled my client base and finally felt confident in my brand messaging. Her strategic approach is exactly what I needed to break through to the next level.',
            'image_url' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=200&q=80',
            'rating' => 5,
            'is_featured' => true,
            'sort_order' => 1,
        ]);

        Testimonial::create([
            'name' => 'Jessica Williams',
            'role' => 'Wellness Entrepreneur',
            'content' => 'The Instagram Audit was a game-changer. Marina identified exactly what was holding my account back and gave me a clear roadmap. My engagement tripled in just 6 weeks following her recommendations.',
            'image_url' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=200&q=80',
            'rating' => 5,
            'is_featured' => true,
            'sort_order' => 2,
        ]);

        Testimonial::create([
            'name' => 'Amanda Chen',
            'role' => 'E-commerce Founder',
            'content' => 'The Brand Mastery Academy gave me the confidence and tools to build a brand that truly represents who I am. The community alone is worth the investment. I\'ve made lifelong connections and my revenue has grown 40% since completing the course.',
            'image_url' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&q=80',
            'rating' => 5,
            'is_featured' => true,
            'sort_order' => 3,
        ]);

        Testimonial::create([
            'name' => 'Rachel Foster',
            'role' => 'Marketing Consultant',
            'content' => 'Marina\'s VIP Mentoring Program was the best investment I\'ve ever made in my business. Having her in my corner for 3 months gave me the accountability and expert guidance I needed to launch my signature offer.',
            'image_url' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=200&q=80',
            'rating' => 5,
            'is_featured' => true,
            'sort_order' => 4,
        ]);

        // FAQs
        FAQ::create([
            'question' => 'How do I know which service is right for me?',
            'answer' => 'If you need quick, focused guidance on a specific challenge, the 1:1 Strategy Consultation is perfect. If you want ongoing support and accountability, the VIP Mentoring Program is ideal. Not sure? Send me a message through the contact form and I\'ll help you decide.',
            'category' => 'services',
            'sort_order' => 1,
        ]);

        FAQ::create([
            'question' => 'What happens after I purchase a course?',
            'answer' => 'After your payment is processed, you\'ll receive an email with access instructions within 24 hours. All courses are self-paced, so you can start learning immediately and go at your own speed.',
            'category' => 'courses',
            'sort_order' => 2,
        ]);

        FAQ::create([
            'question' => 'Do you offer refunds?',
            'answer' => 'I offer a 14-day money-back guarantee on all digital products and courses. For services like consultations and audits, refunds are available if the session hasn\'t taken place yet. The VIP Mentoring Program has a 7-day cooling-off period.',
            'category' => 'general',
            'sort_order' => 3,
        ]);

        FAQ::create([
            'question' => 'How does the Instagram Account Audit work?',
            'answer' => 'After purchase, I\'ll review your Instagram account within 5-7 business days. You\'ll receive a detailed PDF report (15-20 pages) with analysis of your profile, content, hashtags, engagement, and growth opportunities, plus specific action items.',
            'category' => 'services',
            'sort_order' => 4,
        ]);

        FAQ::create([
            'question' => 'Can I book a consultation for my team?',
            'answer' => 'Absolutely! I offer team consultations and workshops. Please reach out via the contact form with details about your team size and goals, and I\'ll create a custom proposal for you.',
            'category' => 'services',
            'sort_order' => 5,
        ]);

        FAQ::create([
            'question' => 'What payment methods do you accept?',
            'answer' => 'All payments are processed securely through Stripe. You can pay with any major credit card, debit card, or Apple Pay / Google Pay. All prices are in USD.',
            'category' => 'general',
            'sort_order' => 6,
        ]);
    }
}
