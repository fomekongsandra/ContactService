<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use PHPUnit\Framework\TestCase;

require __DIR__.'/../../src/ContactService.php';

/**
 * * @covers invalidInputException
 * @covers \ContactService
 *
 * @internal
 */
final class ContactServiceIntegrationTest extends TestCase
{
    private $contactService;

    public function __construct(string $name = null, array $data = [], $dataName = '') {
        parent::__construct($name, $data, $dataName);
        $this->contactService = new ContactService();
    }

    // test de suppression de toute les données, nécessaire pour nettoyer la bdd de tests à la fin
    public function testDeleteAll()
    {
        $contactService = new ContactService();
        $contactService-> deleteAllContact() ;
        
    }
        
    public function testCreationContact()
    {
        $contactService = new ContactService();
        $contactService= insert("pharex","panmo");
    }

    public function testSearchContact()
    {
        $contactService = new ContactService();
        $contactService= "SELECT * from contacts where prenom=sandra" ;
    }

    public function testModifyContact()
    {
        $contactService = new ContactService();
        $contactService->UpdateContact(1,"fomekong","sandra");
       
       
    }

    public function testDeleteContact()
    {
        $contactService = new ContactService();
        $contactService->DeleteContact(5) ;
       
    }
   
}