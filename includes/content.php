<?php
// who we are content
function who_we_are_content() {
    return '
    <style>
        .acc-content .list-style-one li:before {
            border-radius: 50%;
            color: #22823A;
            background-color: rgba(34, 130, 58, 0.20);
        }
    </style>
    <ul class="accordion-box">
        <li class="accordion block active-block">
            <div class="acc-btn active">
                <div class="icon-box"><i class="icon-29"></i></div>
                <h3>Who we are</h3>
            </div>
            <div class="acc-content current">
                <div class="content">
                    <p>We are a Licensed Cocoa Buying Company dedicated to sourcing and marketing high-quality cocoa beans both locally and internationally. Our commitment to sustainability, fair trade, and farmer empowerment makes us a trusted partner in the cocoa industry. With a strong presence in cocoa-producing regions, we work directly with farmers to ensure premium-quality cocoa while promoting responsible agricultural practices.</p>
                </div>
            </div>
        </li>
        <li class="accordion block">
            <div class="acc-btn">
                <div class="icon-box"><i class="icon-29"></i></div>
                <h3>What we do</h3>
            </div>
            <div class="acc-content">
                <div class="content">
                    <p>Our company specializes in the purchase, marketing, and supply of cocoa beans, along with providing agrochemical solutions to improve agricultural productivity. We ensure that cocoa farmers receive competitive pricing, training, and resources to enhance their yield and livelihood. Our operations include:
                    <ul class="list-style-one mb_20 clearfix">
                        <li style="margin-left:20px;">
                            <strong>Internal Marketing of Cocoa:</strong> Procuring and delivering cocoa beans to the Take Over Centres of Cocoa Marketing Company.
                        </li>
                        <li style="margin-left:20px;">
                            <strong>External Marketing of Cocoa:</strong> Facilitating international cocoa trade in collaboration with global clients and CMC.
                        </li>

                        <li style="margin-left:20px;">
                            <strong>Supply of Agrochemicals:</strong> Providing essential agricultural inputs to support sustainable cocoa farming.
                        </li>
                    </ul>
                </div>
            </div>

        </li>
        <li class="accordion block">
            <div class="acc-btn">
                <div class="icon-box"><i class="icon-29"></i></div>
                <h3>Why choose us</h3>
            </div>
            <div class="acc-content">
                <div class="content">
                    <ul class="list-style-one mb_20 clearfix">
                        <li style="margin-left:20px;">
                            <strong>Commitment to Quality:</strong> We source only the finest cocoa beans through strict quality control measures.
                        </li>
                        <li style="margin-left:20px;">
                            <strong>Sustainable Practices:</strong> We actively promote environmentally friendly and ethical cocoa farming.

                        </li>
                        <li style="margin-left:20px;">
                            <strong>Farmer Empowerment:</strong> Through training, fair pricing, and community support, we help farmers thrive.
                        </li>
                        <li style="margin-left:20px;">
                            <strong>Global Reach:</strong> Our international trade partnerships ensure seamless and efficient cocoa distribution.

                        </li>
                        <li style="margin-left:20px;">
                            <strong>Corporate Social Responsibility:</strong> We invest in local communities, education, and environmental sustainability.
                        </li>
                    </ul>
                </div>

            </div>
        </li>

    </ul>';
}

// products and services content
function products_and_services_content() {
    return [
        [
            'title' => 'Internal Marketing of Cocoa',
            'description' => '<p>Our core activity is the purchase of high-quality cocoa beans and their delivery to the Take Over Centres of the Cocoa Marketing Company (CMC), the authorized department of the Ghana Cocoa Board. Through our expertise and industry connections, we facilitate efficient cocoa trading, ensuring that both local and international markets receive premium-grade cocoa.</p>',
            'image' => 'assets/images/products/internal-marketing.jpg'
        ],
        [
            'title' => 'External Marketing of Cocoa',
            'description' => '<p>In addition to serving the domestic market, we engage in external marketing for international clients, including cocoa processing companies, chocolate manufacturers, and global traders. These transactions are handled in collaboration with CMC, ensuring compliance with international standards and fair trade policies. Our strong relationships with global partners allow us to provide seamless trading solutions for our international clientele.</p>',
            'image' => 'assets/images/products/external-marketing.jpg'
        ],
        [
            'title' => 'Supply of Agrochemicals',
            'description' => '<p>As part of our commitment to improving cocoa production, we formulate, manufacture, and import agrochemicals designed for cocoa farming and other food crops. Our agrochemicals undergo rigorous research and testing with the Cocoa Research Institute of Ghana (CRIG), a department of the Ghana Cocoa Board. After obtaining the necessary approvals, we supply high-quality fertilizers, pesticides, and other essential farming inputs to enhance productivity and sustainability in the agricultural sector.</p>
            <p>Our company also offers custom-formulated agrochemicals tailored to meet specific farming needs. If you require specialized agricultural solutions, please contact us to discuss your requirements.</p>',
            'image' => 'assets/images/products/agrochemicals.jpg'
        ]
    ];
}
?>