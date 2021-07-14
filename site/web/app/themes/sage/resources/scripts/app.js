/**
 * External Dependencies
 */
import 'bootstrap';

import { router } from 'js-dom-router';
import common from './routes/common';

router
  .on({
    common,
  })
  .dispatch('common')
  .fire();
