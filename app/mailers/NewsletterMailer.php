<?php
/**
 * Created by Zanoric
 * Date: 1/19/2015
 * Time: 11:34 PM
 */

namespace Mailers;


class NewsletterMailer extends Mailer {

    public function newProducts()
    {
        $this->subject = "Our new Products!";
        $this->view = "emails.newsletter.newProducts";

        return $this;
    }

} 