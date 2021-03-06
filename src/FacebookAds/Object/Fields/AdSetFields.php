<?php
/**
 * Copyright 2014 Facebook, Inc.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 */

namespace FacebookAds\Object\Fields;

abstract class AdSetFields {

  const ID = 'id';
  const NAME = 'name';
  const ACCOUNT_ID = 'account_id';
  const CAMPAIGN_GROUP_ID = 'campaign_group_id';
  const CAMPAIGN_STATUS = 'campaign_status';
  const START_TIME = 'start_time';
  const END_TIME = 'end_time';
  const UPDATED_TIME = 'updated_time';
  const CREATED_TIME = 'created_time';
  const DAILY_BUDGET = 'daily_budget';
  const LIFETIME_BUDGET = 'lifetime_budget';
  const BUDGET_REMAINING = 'budget_remaining';
}
