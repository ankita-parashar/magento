<?php
require_once 'abstract.php';

class Mage_Shell_CustomerUpdate extends Mage_Shell_Abstract
{
    public function run()
    {
	$keys = array(
	/* '99c10bad-6c27-4197-b264-28eea2708a8d',
	'757a49ad-e65a-4234-ac2e-715fa0fed5eb',
	'25216eb6-f9a4-4fcb-9b23-0fc108d41637',
	'd2fed3b1-72a6-4698-a58f-78c572c82c9f',
	'be61a672-670b-417f-9b4b-f25d0eba1e43',
	'7642a5ab-6f29-4df7-80bc-8c1ed6ee3afb',
	'b669ad1e-05e1-4985-b7cb-d923693eee78',
	'2c454201-c238-444f-abc5-1bf19c0f380d',
	'dce3385b-411e-4be2-9a20-edde783ac3e3',
	'53537167-28aa-441c-b329-b5d5a33869f8',
	'3fddd55e-04cf-4c11-8da5-e55638df0fe3',
	'e600367a-a0a7-4ad1-82f8-fc1c2b48837d', 
	'1af788b7-0a62-47b1-8373-c758229f9f9f', ---
	'ef2f1473-1219-4a1a-862e-4b93071a38d0', 
	'fad9bf58-389a-4d80-9363-9c6870cc8ec6', 
	'3074c909-5ebc-4edd-aa6d-8dde34c7551f',
	'6bfc7de3-90b4-4ed7-b1da-3d5f5f2b3da1',
	'62e9428e-c958-4553-9426-4d779803824b',
	'07c82ba6-9da6-4b59-a811-79f97a51f542',
	'7ed23adb-dd45-4d02-b1f7-a7c4339107c0',
	'74208d82-07eb-4157-853c-a2607ea31021',
	'08f7a2d4-432b-455d-a7a8-711d08be9939',
	'be6a0598-eedc-4e2e-bdc8-94708b212cf3',
	'31648433-6248-45b8-b469-d6706237dd29',
	'ac5f3ce8-dfb1-4c71-8200-0a4b78964a6a',
	'a5e944e7-6a47-4d78-8a18-287ead846803',
	'08d95915-6240-4519-9a6e-a9567c0681bd',
	'583e79ff-ffeb-456b-9173-afcd539b235b',
	'95113617-818e-47a4-b815-7e12abd7a029',
	'068af193-7dea-4ffb-80f5-31dd544d4c93',
	'3f2d0b45-eb40-4f9c-9bcf-3b0e1dc04789',
	'8cad4033-4b27-406e-91c5-a4d89222b61b',
	'7cf49504-f4a3-4d40-b8c0-eda154221e67',
	'2882d2fa-7651-43d3-99c4-1e3cd37c2fe3', -- 
	'f56326e2-d565-48ff-8774-12765c3dff4a',
	'c1d0a205-2831-4754-ab91-6644e100d06a',
	'1f7fe59c-929c-44e8-a674-765e027b0319',
	'548696a0-8da8-4f52-86dd-8e4732db6a30',
	'07be7c96-d4c8-4b81-818f-720bf24c6a33',
	'3bc9ac9c-e6b3-4e63-9768-12491489ceb5',
	'6a531abb-668c-4d82-a5ef-457cb0233c11',
	'5651ee1e-5d17-4627-8335-80193d1201ad',
	'51c5e1bd-242a-4c90-b771-aa738330bdb2', */
	'99c10bad-6c27-4197-b264-28eea2708a8d',
	'757a49ad-e65a-4234-ac2e-715fa0fed5eb',
	'25216eb6-f9a4-4fcb-9b23-0fc108d41637',
	'd2fed3b1-72a6-4698-a58f-78c572c82c9f',
	'be61a672-670b-417f-9b4b-f25d0eba1e43',
	'7642a5ab-6f29-4df7-80bc-8c1ed6ee3afb',
	'b669ad1e-05e1-4985-b7cb-d923693eee78',
	'2c454201-c238-444f-abc5-1bf19c0f380d',
	'dce3385b-411e-4be2-9a20-edde783ac3e3',
	'c62ad65e-47d6-4311-9627-0fc5b423e289',
	'7283fc12-118a-41c2-baf1-6fbcecf71533',
	'1c331d18-e7b2-4475-be21-db237c33abc2',
	'670bf4ea-cd86-4cfa-9389-fabe0d873394',
	'a99d7a98-cd19-4306-b50a-b66dabc9ae5d',
	'8daf1a02-048f-4bac-8fe0-922df8769e47',
	'cbb2cfcd-cf3b-4803-892d-9d991cc2be05',
	'aad7ce64-0a78-4047-a885-84587f263799',
	'69c80392-c5d4-40ea-a311-82c7b41c3653',
	'663844b8-ea9d-45d3-a0b8-638d34a63049',
	'fc084414-2fd5-4f08-a847-4511a1ca948c',
	'8e309d0b-2e31-4b71-99aa-963ab87aebcc',
	'4f712888-93a2-4caa-9c07-e9702ed1a095',
	'fa4ea3b1-f518-4814-93b9-71a953518c1e',
	'fb59e160-aa37-4b1b-9927-0f315d51c9de',
	'037e4ded-c40f-4d4b-bb7a-f666a5f4971a',
	'f33b652b-54b3-431d-8f83-47078ef30b06',
	'24cb91a8-c413-40df-90b3-04b020cd19f3',
	'd863b4f3-c330-4bdb-b328-2c619edba1e3',
	'f6c665e3-d9c2-4993-a45b-4811e387917b',
	'67cffefc-8b1f-4ff3-8cf4-7fe737f7ac85',
	'bfa81052-20cd-42e5-96e7-751d9f1afd7b',
	'7c0c9384-f307-48ea-be2f-a7e328425d49',
	'bb228499-d13c-4548-a787-cf4edd141f6d',
	'd1a3acb2-172d-4f37-8f26-31a87367981b',
	'5ea2902d-8d40-498b-92d5-43b308fc0edb',
	'42fdc386-4c4a-4e66-a4f3-2758c8ca7864',
	'9fddd09e-db58-4627-8aaf-d972443c25a9',
	'6a25f996-bac7-463c-ae0d-fb1ed7beeecc',
	'5915fd38-0922-43a0-8880-9f5117641d2e',
	'e4cd8beb-35ac-4198-bdab-ab6bb566a618',
	'dd5cb677-baed-4e3c-b90a-4742fabce82b',
	'66fdb657-44e7-4968-a959-dfc4e4c839df',
	'd2ea465a-01f0-43ca-928c-7876f0263ed7',
	'1c8fed20-2d09-4d1b-a923-5bcf6a810367',
	'35b8f272-7380-41b9-971d-64af71dc9509',
	'ed421cf6-d912-457f-be1c-8af602ee27a8',
	'60ed15d0-44e3-466f-8c38-0d7a9e493b92',
	'87424a18-f249-4d27-9938-c5450da62998',
	'214aa415-9860-489a-ade6-b1c40e1d2941',
	'f0498d7f-3246-4ba5-af74-0b208b4371c7',
	'9b55f0f5-d437-4302-97dc-943aed86b570',
	'f00797c6-5a26-4125-a9d0-e22e9aa3fb87',
	'd8fe6499-b3b8-4b1a-8ba0-a546fb1f5aec',
	'4702d734-948a-4558-acdd-0a99900390c4',
	'4c6cb5c3-72f7-4b59-814c-ec21327aeff7',
	'cd2783c4-1732-41d8-803f-51333f3631b7',
	'02180e68-cc08-4c5e-8693-14cf33328738',
	'6a9de977-1cc0-40f6-af90-b55aa482dcf8',
	'7e8e7e60-2a60-4ea6-bac5-a1ee61a9cfea',
	'bebbdf61-bf1d-4d7a-bdef-cfb89880dfc3',
	'5eeb3498-3e94-4f30-9b09-5466f76837bb',
	'649bd5c7-935e-4952-921b-efab985e8f26',
	'92278202-17fb-489f-933b-c4d4a3105d05',
	'2c83eae7-73d8-4310-89dd-5c51808869cb',
	'6fec827a-4a19-4dd5-9a33-9a43f09d32dd',
	'2648d3fb-6074-400a-ad1d-3b3d2ddacda1',
	'5d6dc78e-3449-45ec-8ac9-e65002c9f311',
	'9a6b0e0f-26fc-4de7-80aa-9935e284906f',
	'991cc4d7-f600-47ff-bb5b-76b4c57485aa',
	'd7255b71-ffca-4d60-b0df-1f251bba1b1a',
	'2ebf5688-c93f-4e0d-a3b4-9153bc7aff98',
	'47a67811-9c49-4478-8329-e7d71a0c7865',
	'd621f15b-9089-4d71-916a-e6753a4687c3',
	'720b598d-37aa-461d-b612-053372690495',
	'7b43e914-94ba-4542-94a0-b975bff100b9',
	'e3bc2a22-8bac-480d-9587-60eeb455c505',
	'12ccc0cc-a3c7-40cf-9266-9560c32354e7',
	'810664a8-5a2a-40f3-8a49-3987af6e5c7d',
	'9a94beac-451c-4577-960c-e2000001e7c9',
	'98af86a4-f1bf-41dc-b3fb-63ce6136dde4',
	'e5108d6a-69ae-41a3-ae22-bb9f11335232',
	'df10d462-0061-4ce4-b9f8-a010d975fae9',
	'd4571005-30c8-4433-9775-2e67865b505e',
	'da390ef0-b239-46f5-b17d-6bcc5bd61dea',
	'7f8a42bf-46ed-43bf-b3c2-827b69a68664',
	'fa664c86-6e0f-4b94-b16e-a2796b44c3b5',
	'8942c85e-d568-4a62-955d-253d3549bf43',
	'8c955343-21b0-4b88-b1a7-245a2a64cd22',
	'efe84cd1-e8f5-495d-b4ae-2a46a948454e',
	'562e1d15-9e52-44e2-b6fa-d7bae933f761',
	'76506b92-6739-4178-b6ad-23f01a8cc471',
	'38c63c61-d6ff-406a-b34d-aad11ce93d89',
	'3fac955b-0068-49f3-9bcb-89dddb55a7b7',
	'4c3b6ed5-edd2-4dc8-ac3a-b6c8f7df4f85',
	'89aa0ae4-b078-484c-86d0-07f01bae17cb',
	'b826ce5f-096a-4500-9a9b-6c3a6c066eb6',
	'17ffa776-8dd9-4aca-a6a8-5b48b4231fc2',
	'63fbc065-570e-442c-9b80-424eaf7001bd',
	'8067f86d-6088-4e50-87ac-fc61739f709a',
	'081a0780-83df-44ba-8988-b1d18682562d',
	'bf7f5d38-a570-4e06-b9fb-55f9ebe9a50a',
	'91327fe7-16ed-42ec-908a-3e79843d1887',
	'64d1c010-5e70-41b2-9897-283ff2c53b2c',
	'24af9df0-3ad8-4a82-8dde-e06074265c35',
	'7a0bd8a9-0bfa-461e-82c3-1c5219de57e5',
	'945c8ca4-bfce-4100-90e4-97f6be642bc4',
	'f86370f3-4c62-47ad-8de3-c094cc0e1287',
	'bd2ccb8b-a12e-4d76-ba59-cdab77a4b021',
	'aa277099-e9af-4255-bf24-e1b8fb496058',
	'8c853c34-9455-49e5-9224-c30c3fb8db68',
	'9c1e6ee8-b656-49a0-a9e1-e23165e37143',
	'548fcbae-799c-4752-ac1e-635d537240c0',
	'a6c1ceb7-5340-4189-ae45-5e188e3858c5',
	'2feadd69-07ad-47b4-a67f-06b5bac66707',
	'0ac9826a-b8c4-4366-8015-70365b46026a',
	'85096c09-4016-4222-8e17-a0cd7c2c9f5f',
	'918ff285-03e3-478f-95dc-79c4f19230b2',
	'1597723d-81ba-4c25-8bd8-e2ddbe1a9564',
	'1884d36c-f091-4506-91dd-a4b241a154b9',
	'7f16f1cb-45b5-4fd7-9bc4-46de27210974',
	'40895882-21aa-4f34-9a90-5df61f2155ff',
	'570c198a-5006-41d5-a5b5-8f6a221a3bfe',
	'90e64928-9b63-4556-b67d-17b5dd2fe861',
	'31f924ec-b0e6-45f4-89b0-f2e24a05bb19',
	'89461b1b-a315-40f6-9751-819505a2c7a4',
	'fa60bfb0-0e36-4570-84a7-0330d8df2c86',
	'5b3f2e8b-fa45-49e9-a7bf-c367be19f927',
	'd90158b0-3ee7-45f1-bad1-e9c75cd9e17c',
	'6c5a4156-4c9b-4c75-b857-d6afeec550e1',
	'9fdc461f-04f0-4817-a0ef-fd6647c8ded2',
	'237f82f3-8528-400c-bdf5-fad01bae0ad6',
	'272ead67-2ea2-470f-ad07-93429c8b4508',
	'8b309489-8ee4-40a4-9d26-50931eec6946',
	'28afc035-515c-4bfc-a4dc-b5b40daf7ac0',
	'4772f040-bd40-498d-b56b-6304470e8a85',
	'2783d08c-a4d1-44ff-8fd5-3439683ed3b6',
	'6e3efbda-d08b-4c88-87f8-018ffa951481',
	'0729759e-d54f-46b1-b8d8-3f8e270c1438',
	'95d5fe17-5e8e-447e-b117-5fce9e01d416',
	'510d7b5f-d008-4d99-b1eb-eb7d7fd65ebb',
	'286a3429-d75d-4962-b113-f90bc57a8e01',
	'3636f46b-70ae-4fe1-8003-852940827776',
	'e2cae8ca-d623-45ac-a68b-8220023d4bb0'
	);
	
	$keys1 = array("1884d36c-f091-4506-91dd-a4b241a154b9");
        
        foreach ( $keys1 as $key) {
    	    echo "start $key\n";
            //Mage::getModel('icc_avectra/avectraQueue')->addUpdateUser($key);
            try {
             $account = Mage::getModel('icc_avectra/account');
             //$customer = $account->getUserByAvectraKey($key);
             //print_r($customer->getData());
             $customer = $account->updateUser($key);
             //unset($customer);
             //unset($account);
            } catch (Exception $e) {
                echo $e->getMessage();
        	Mage::log("$key failed". $e->getMessage(), null ,"avectra_key.log", true);
            }
            echo "end ".$key ."\n";
        	Mage::log("Customer $key added to queue", null ,"avectra_key.log", true);
            sleep(2);
        }    
    }
}
    $shell = new Mage_Shell_CustomerUpdate();
    $shell->run();
?>
                                                