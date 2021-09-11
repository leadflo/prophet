# Prophet

> Type-safe, reliable message-passing for PHP

Prophet makes it easy to design and build decoupled systems using PHP.

It does this by providing well-tested, type-safe primitives to decompose, distribute and integrate your applications using a message-passing architecture.

Prophet supports these concepts and patterns out of the box:

* **A message bus**
* **Message routing**
* **Messages**
* **Receivers**
* **Middleware**
* **Persistence & queues**
* **Workers**
* **Framework bridges**

## Getting Started

Install via Composer:

```bash
composer require leadflo/prophet
```

* [ ] Provide minimum working example of an application
* [ ] Demonstrate how to integrate with a Laravel application

## Key Concepts

### The Message Bus

The message bus ties everything together.

Your application dispatches messages to the bus. The bus, in turn, routes the message to a receiver.

You may dispatch messages synchronously, asynchronously and even delay them until a later time.

Your dispatching code is then decoupled from the receiver code.

* [ ] Show how to init a bus
* [ ] Show how to dispatch an async message
* [ ] Show how to dispatch a sync message

### Routing

A message router accepts rules that define where a message should be delivered.

This may be to one or more receivers, depending on the type of message.

Out of the box, Prophet provides a simple message-to-receiver router, along with a way to group routes to apply common [middleware](#middleware).

* [ ] Show an example of a route definition
* [ ] Show an example of a route group definition

### Messages

Messages represent a unit of communication

Out of the box, this includes:

* A **command** that describes an instruction to perform work
* An **event** that describes some form of state change
* A **query** that describes a request for some form of data

But Prophet can accept any type of message and makes it easy for you to define them.

As a rule, all messages **must** be serializable, such that they can be persisted and potentially passed to other systems in other languages.

To facilitate this, messages should be immutable value objects, which in their basic form may be plain old DTOs.

* [ ] Show an example of a Command message
* [ ] Show an example of an Event message
* [ ] Show an example of a Query message
* [ ] Show an example of a user-defined message

### Receivers

A receiver accepts messages, performing some work in response.

Out of the box, this includes:

* **Responders**, which receive instructions in the form of commands, optionally providing a result
* **Listeners**, which receive events without providing a result
* **Resolvers**, which accept queries and returns some form of data as a result

But, like messages, Prophet makes it easy define new forms of receivers.

Receivers define a single method to implement. Outside of that, your receivers are free to perform any side-effects. You are free to inject any dependencies using the DI container of your choice.

* [ ] Show an example of a Responder receiver
* [ ] Show an example of a Listener receiver
* [ ] Show an example of a Resolver receiver
* [ ] Show an example of a user-defined receiver

### Middleware

Middleware provides a way to extract and apply common processing before and after a receiver accepts a message.

* [ ] Describe use cases
* [ ] Describe middleware provided out of the box
* [ ] Show an example of user-defined middleware

### Persistence & Queues

* **Persistence**, using the adapter pattern with implemenations for common message queuing systems

* [ ] Describe use cases
* [ ] Describe persistence/queues supported out of the box
* [ ] Show how to configure the bus with DB-driven queue
* [ ] Show how to configure the bus with a Redis-driven queue
* [ ] Show how to configure the bus with an AMPQ service
* [ ] Show how to use the Laravel bridge as a persistence mechanism
* [ ] Show how to use an in-memory store for testing purposes

### Workers

* **Workers**, which execute message receivers in the background, removing them from persistence

* [ ] Describe use cases
* [ ] Describe types of supported workers
* [ ] Show how to start a single-process worker
* [ ] Show how to start a forking worker
* [ ] Show how to start a threaded worker
* [ ] Show how to start a fibers worker
* [ ] Show how to use a worker in the same process for testing

### Framework Bridges

* [ ] Describe the Laravel bridge
* [ ] Describe how to bridge with other frameworks

## Learn more

* [ ] Direct to important areas of the documentation
* [ ] Direct to information on message queues
* [ ] Direct to information on message-passing architecture
* [ ] Direct to information on enterprise integration patterns

## Contributing

* [ ] Direct to CONTRIBUTING file
* [ ] Describe how to contribute

## Releases

* [ ] Describe the release process/cycle
* [ ] Direct to RELEASING file
