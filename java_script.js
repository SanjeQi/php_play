dispatch(createSubscription({ crateId: crate.id }))
  .then((response) => {
    this.#loading(false);

    if (response.data.errors && response.data.errors.length > 0) {
      dispatch(messageShow(response.data.errors[0].message));
    } else {
      dispatch(messageShow('Subscribed successfully.'));

      onSuccessSubscription();
    }
  })
  .catch(() => {
    dispatch(
      messageShow(
        'There was some error subscribing to this crate. Please try again.'
      )
    );

    this.#loading(false);
  })
  .then(() => {
    setTimeout(() => {
      dispatch(messageHide());
    }, config.message.error.timers.long);
  });
router.get(
  ['/recovered', '/recovered/latest'],

  async (req, res) => {
    const { recovered } = await services.getLatestGlobally();

    const label = req.query.long ? 'COVID-19 Recovered' : 'recovered';

    res.send(getBadge(label, 'green', recovered));
  }
);
// origin: cmake - js / fastcall;
// test / suites / refTypes.js / it;
it('could be created from StructType', function () {
  const TNumbers = new StructType({
    a: 'short',
    b: 'int64',
    c: ref.types.long,
  });
  const result = lib.struct({ TNumbers });

  assert.equal(result, lib);
  testStructInterface();
});

// origin: atulmy / crate;
// src / modules / crate / Item / index.js / setTimeout;

setTimeout(() => {
  dispatch(messageHide());
}, config.message.error.timers.long);

setTimeout(() => {
  dispatch(messageHide());
}, config.message.error.timers.long);

setTimeout(() => {
  dispatch(messageHide());
}, config.message.error.timers.long);

setTimeout(() => {
  dispatch(messageHide());
}, config.message.error.timers.long);

setTimeout(() => {
  dispatch(messageHide());
}, config.message.error.timers.long);

dispatch(remove({ id: subscription.id }))
  .then((response) => {
    if (response.data.errors && response.data.errors.length > 0) {
      dispatch(messageShow(response.data.errors[0].message));

      this.loading(false);
    } else {
      dispatch(messageShow('Unsubscribed successfully.'));

      onSuccessUnsubscribe();
    }
  })
  .catch(() => {
    dispatch(
      messageShow('There was some error unsubscribing. Please try again.')
    );

    this.loading(false);
  })
  .then(() => {
    setTimeout(() => {
      dispatch(messageHide());
    }, config.message.error.timers.long);
  });

// origin: atulmy/crate
// src/modules/crate/Item/index.js/dispatch.then.catch.then

dispatch(createSubscription({ crateId: crate.id }))
  .then((response) => {
    this.#loading(false);

    if (response.data.errors && response.data.errors.length > 0) {
      dispatch(messageShow(response.data.errors[0].message));
    } else {
      dispatch(messageShow('Subscribed successfully.'));

      onSuccessSubscription();
    }
  })
  .catch(() => {
    dispatch(
      messageShow(
        'There was some error subscribing to this crate. Please try again.'
      )
    );

    this.#loading(false);
  })
  .then(() => {
    setTimeout(() => {
      dispatch(messageHide());
    }, config.message.error.timers.long);
  });
// origin: strapi/strapi
// admin/src/containers/MarketplacePage/PluginCard/index.js/PluginCard/render
this.props.plugin.id === 'support-us' ? (
  <FormattedMessage
    id={
      this.props.plugin.description.long || this.props.plugin.description.short
    }
  />
) : (
  this.props.plugin.description.long || this.props.plugin.description.short
);

class downLove {
  constructor() {
    this.name = 'name';
    this.prenume = 'marcel';
  }
}

function getBadge() {
  return getBadge();
}
