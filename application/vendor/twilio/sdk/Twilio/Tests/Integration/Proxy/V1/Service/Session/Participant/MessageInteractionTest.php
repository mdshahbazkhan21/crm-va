<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Proxy\V1\Service\Session\Participant;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class MessageInteractionTest extends HolodeckTestCase {
    public function testCreateRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->proxy->v1->services("KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                    ->sessions("KCaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                    ->participants("KPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                    ->messageInteractions->create();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'post',
            'https://proxy.twilio.com/v1/Services/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Sessions/KCaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/KPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/MessageInteractions'
        ));
    }

    public function testCreateResponse() {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "service_sid": "KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "data": "body",
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "participant_sid": "KPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "inbound_participant_sid": null,
                "inbound_resource_sid": null,
                "inbound_resource_status": null,
                "inbound_resource_type": null,
                "inbound_resource_url": null,
                "outbound_participant_sid": "KPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "outbound_resource_sid": "SMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "outbound_resource_status": "sent",
                "outbound_resource_type": "Message",
                "outbound_resource_url": null,
                "sid": "KIaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "type": "message",
                "url": "https://proxy.twilio.com/v1/Services/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Sessions/KCaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/KPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/MessageInteractions/KIaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "session_sid": "KCaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->proxy->v1->services("KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                          ->sessions("KCaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                          ->participants("KPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                          ->messageInteractions->create();

        $this->assertNotNull($actual);
    }

    public function testFetchRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->proxy->v1->services("KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                    ->sessions("KCaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                    ->participants("KPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                    ->messageInteractions("KIaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://proxy.twilio.com/v1/Services/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Sessions/KCaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/KPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/MessageInteractions/KIaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'
        ));
    }

    public function testFetchResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "service_sid": "KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "data": "data",
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z",
                "participant_sid": "KPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "inbound_participant_sid": null,
                "inbound_resource_sid": null,
                "inbound_resource_status": null,
                "inbound_resource_type": null,
                "inbound_resource_url": null,
                "outbound_participant_sid": "KPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "outbound_resource_sid": "SMaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "outbound_resource_status": "sent",
                "outbound_resource_type": "Message",
                "outbound_resource_url": null,
                "sid": "KIaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "type": "message",
                "url": "https://proxy.twilio.com/v1/Services/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Sessions/KCaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/KPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/MessageInteractions/KIaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "session_sid": "KCaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->proxy->v1->services("KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                          ->sessions("KCaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                          ->participants("KPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                          ->messageInteractions("KIaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")->fetch();

        $this->assertNotNull($actual);
    }

    public function testReadRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->proxy->v1->services("KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                    ->sessions("KCaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                    ->participants("KPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                    ->messageInteractions->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://proxy.twilio.com/v1/Services/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Sessions/KCaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/KPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/MessageInteractions'
        ));
    }

    public function testReadEmptyResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "interactions": [],
                "meta": {
                    "previous_page_url": null,
                    "next_page_url": null,
                    "url": "https://proxy.twilio.com/v1/Services/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Sessions/KCaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/KPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/MessageInteractions?PageSize=50&Page=0",
                    "page": 0,
                    "first_page_url": "https://proxy.twilio.com/v1/Services/KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Sessions/KCaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Participants/KPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/MessageInteractions?PageSize=50&Page=0",
                    "page_size": 50,
                    "key": "interactions"
                }
            }
            '
        ));

        $actual = $this->twilio->proxy->v1->services("KSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                          ->sessions("KCaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                          ->participants("KPaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa")
                                          ->messageInteractions->read();

        $this->assertNotNull($actual);
    }
}